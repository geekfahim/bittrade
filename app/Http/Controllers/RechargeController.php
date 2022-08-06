<?php

namespace App\Http\Controllers;

use App\Models\MobileRecharge;
use App\Models\Settings;
use App\Models\ShoppingWalletHistory;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use ReloadlyPHP\Client;
use ReloadlyPHP\Model\Phone;
use Notification;
use App\Notifications\MobileRechargeCashbackNotification;

class RechargeController extends Controller
{
    private $isTesting = false;
    private $reloadly;
    private $clientID;
    private $clientSecret;
    private $senderCountry = 'IN';
    private $senderNumber = '+918001871770';
    
    private $testClientID = "1U1gZ2Zqpae8xi09cPmV1ixbpRdKBHih";
    private $testClientSecret = "I5P1v6IDmW-NdliLnMtMq6LxYXeA0w-zroHmbtbw8irvvGLHRVPOrV2VetPH35n";
    
    private $liveClientID = "WB05MNfOOgTdbDXUGdJm0Pa5KC7xAaq6";
    private $liveClientSecret = "TmGpg8yEb7-vz8bUKK8LZQc0PZ5O1k-IHBZqHddHYGnWJKT36rZdU6QU60JRGGl";

    public function __construct()
    {
        $this->clientID = $this->isTesting ? $this->testClientID : $this->liveClientID;
        $this->clientSecret = $this->isTesting ? $this->testClientSecret : $this->liveClientSecret;
        $env =  ['APP_ENV' => $this->isTesting ? 'sandbox' : 'production'];
        $this->reloadly = new Client($this->clientID, $this->clientSecret, $this->isTesting, $env);
    }

    private function _countries()
    {
        try {
            $countries = [];
            $getCountries = $this->reloadly->getCountries();
            foreach ($getCountries as $country) {
                $countries[] = [
                    'iso_name' => $country->getIsoName(),
                    'name' => $country->getName(),
                    'currency_code' => $country->getCurrencyCode(),
                    'currency_name' => $country->getCurrencyName(),
                    'currency_symbol' => $country->getCurrencySymbol(),
                    'flag' => $country->getFlag(),
                    'calling_codes' => $country->getCallingCodes(),
                ];
            }
            return [
                'status' => true,
                'message' => '',
                'data' => $countries
            ];
        } catch (\Exception $e) {
            return [
                'status' => false,
                'message' => $e->getMessage(),
                'data' => []
            ];
        }
    }

    private function _operatorsByCountry($country)
    {
        try {
            $operators = [];
            $getOperators = $this->reloadly->getOperatorsByCountryIso($country, true, true, true);
            foreach ($getOperators as $operator) {
                $operators[] = [
                    'id' => $operator->getOperatorId(),
                    'name' => $operator->getName(),
                    'currency' => $operator->getDestinationCurrencyCode(),
                    'min' => $operator->getLocalMinAmount(),
                    'max' => $operator->getLocalMaxAmount(),
                    'amounts' => $operator->getFixedAmounts(),
                    'localAmounts' => $operator->getLocalFixedAmounts(),
                    'plans' => $operator->getGeographicalRechargePlans(),
                ];
            }
            return [
                'status' => true,
                'message' => '',
                'data' => $operators
            ];
        } catch (\Exception $e) {
            return [
                'status' => false,
                'message' => $e->getMessage(),
                'data' => []
            ];
        }
    }

    private function _operatorByPhone($phone, $country)
    {
        try {
            $getOperatorByPhoneNumber = $this->reloadly->getOperatorByPhoneNumber($phone, $country);
            $operators = [
                'id' => $getOperatorByPhoneNumber->getOperatorId(),
                'name' => $getOperatorByPhoneNumber->getName(),
                'amounts' => $getOperatorByPhoneNumber->getSuggestedAmountsMap(),
            ];
            return [
                'status' => true,
                'message' => '',
                'data' => $operators
            ];
        } catch (\Exception $e) {
            return [
                'status' => false,
                'message' => $e->getMessage(),
                'data' => []
            ];
        }
    }

    private function _recharge($operator, $country, $country_code, $amount, $phone, $id)
    {
        try {
            $mobile = new Phone();
            $mobile->setCountryCode($country);
            $mobile->setNumber($country_code . $phone);
            $sender = new Phone();
            $sender->setCountryCode($this->senderCountry);
            $sender->setNumber($this->senderNumber);
            $topup = $this->reloadly->topup($operator, $amount, $mobile, $sender, $id, true);
            return [
                'status' => true,
                'message' => '',
                'data' => [
                    'id' => $topup->getTransactionId(),
                    'date' => $topup->getTransactionDate(),
                    'custom_identifier' => $topup->getCustomIdentifier(),
                    'recipient_phone' => $topup->getRecipientPhone(),
                    'country_code' => $topup->getCountryCode(),
                    'operator_id' => $topup->getOperatorId(),
                    'operator_name' => $topup->getOperatorName(),
                    'requested_amount' => $topup->getRequestedAmount(),
                    'requested_amount_currency_code' => $topup->getRequestedAmountCurrencyCode(),
                    'delivered_amount' => $topup->getDeliveredAmount(),
                    'delivered_amount_currency_code' => $topup->getDeliveredAmountCurrencyCode(),
                    'discount' => $topup->getDiscount(),
                    'discount_currency_code' => $topup->getDiscountCurrencyCode(),
                    'sender_phone' => $topup->getSenderPhone(),
                    // 'operatorTransactionId' => $topup->getOperatorTransactionId(),
                    'pin_details' => $topup->getPinDetails(),
                    'balance_info' => $topup->getBalanceInfo(),
                ]
            ];
        } catch (\Exception $e) {
            return [
                'status' => false,
                'message' => $e->getMessage(),
                'data' => []
            ];
        }
    }

    private function _fxRates($operator, $amount)
    {
        try {
            $fxRate = $this->reloadly->getFxRate($operator, $amount);
            return [
                'status' => true,
                'message' => '',
                'data' => [
                    'name' => $fxRate->getName(),
                    'fx_rate' => $fxRate->getFxRate(),
                    'currency_code' => $fxRate->getCurrencyCode(),
                    'operator_id' => $fxRate->getOperatorId(),
                ]
            ];
        } catch (\Exception $e) {
            return [
                'status' => false,
                'message' => $e->getMessage(),
                'data' => []
            ];
        }
    }

    private function _currencyLayer($amount)
    {
        $endpoint = 'convert';
        $access_key = '61c9fea3fb2991d40276bf6c479dc288';

        $from = 'INR';
        $to = 'USD';

        // initialize CURL:
        $ch = curl_init('https://api.currencylayer.com/' . $endpoint . '?access_key=' . $access_key . '&from=' . $from . '&to=' . $to . '&amount=' . $amount . '');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        // get the (still encoded) JSON data:
        $json = curl_exec($ch);
        curl_close($ch);

        // Decode JSON response:
        $conversionResult = json_decode($json, true);

        // access the conversion result
        return round($conversionResult['result'], 2);
    }

    public function index(Request $request)
    {
        $user_id = Auth::user()->id;

        return view('user.mobile_recharge')->with(array(
            'title' => 'Mobile Recharge',
            'recharges' => MobileRecharge::with('user')->where('user_id', $user_id)->latest()->get(),
            'settings' => Settings::where('id', '=', '1')->first(),
        ));
    }

    public function new(Request $request)
    {
        try {
            $user_id = Auth::user()->id;

            $data = array(
                'title' => 'Mobile Recharge',
                'recharges' => MobileRecharge::with('user')->where('user_id', $user_id)->latest()->get(),
                'settings' => Settings::where('id', '=', '1')->first(),
            );
            $data['countries'] = $this->_countries();
            $data['shoppingWalletBalance'] = Auth::user()->shopping_wallet_bal;

            if ($request->has('type')) {
                $type = $request->input('type');
                if ($type == 1) {
                    $validator = Validator::make($request->all(), [
                        'country' => 'required',
                        'country_code' => 'required',
                        'phone' => 'required',
                    ]);

                    if ($validator->fails()) {
                        return redirect()->route('mobilerecharge.new')->withErrors($validator)->withInput();
                    }

                    $country = $request->input('country');
                    $country_code = $request->input('country_code');
                    $phone = $request->input('phone');
                    $data['operators'] = $this->_operatorsByCountry($country);
                    $data['operatorByPhone'] = $this->_operatorByPhone($country_code . $phone, $country);
                    $data['old'] = [
                        'country' => $country,
                        'country_code' => $country_code,
                        'phone' => $phone,
                    ];
                    $data['isNext'] = 1;
                } else {
                    $validator = Validator::make($request->all(), [
                        'country' => 'required',
                        'country_code' => 'required',
                        'phone' => 'required',
                        'operator' => 'required',
                        'currency' => 'required',
                        'amount' => 'required',
                    ]);

                    if ($validator->fails()) {
                        return redirect()->route('mobilerecharge.new')->withErrors($validator)->withInput();
                    }

                    DB::beginTransaction();
                    $currency = $request->input('currency');
                    $operator = $request->input('operator');
                    $amount = $request->input('amount');
                    if ($currency != 'INR') {
                        $fxRate = $this->_fxRates($operator, $amount);
                        if ($fxRate['status']) {
                            $fxRate = $fxRate['data']['fx_rate'] ?? 0;
                        } else {
                            throw new \Exception('Something Went Wrong');
                        }
                    } else {
                        $fxRate = $amount;
                    }

                    $usdAmount = $this->_currencyLayer($amount);

                    if ($data['shoppingWalletBalance'] < $usdAmount) {
                        throw new \Exception('Invalid Shopping Wallet Balance');
                    }

                    $recharge = new MobileRecharge();
                    $recharge->user_id = Auth::user()->id;
                    $recharge->country = $request->input('country');
                    $recharge->country_code = $request->input('country_code');
                    $recharge->phone = $request->input('phone');
                    $recharge->operator = $request->input('operator');
                    $recharge->currency = $request->input('currency');
                    $recharge->amount = $request->input('amount');
                    $recharge->amount_inr = $fxRate;
                    $recharge->amount_usd = $usdAmount;
                    $recharge->location_code = $request->input('location');
                    $recharge->note = $request->input('note');
                    $recharge->save();

                    $response = $this->_recharge($recharge->operator, $recharge->country, $recharge->country_code, $recharge->amount, $recharge->phone, $recharge->id);

                    if ($response['status']) {
                        // Change mobile recharge status
                        $update_recharge = MobileRecharge::find($recharge->id);
                        $update_recharge->status = 1;
                        $update_recharge->response = json_encode($response['data']);
                        $update_recharge->save();

                        // Add shopping wallet history
                        $shopping_wallet_history = new ShoppingWalletHistory();
                        $shopping_wallet_history->user_id = Auth::user()->id;
                        $shopping_wallet_history->amount = $recharge->amount_usd;
                        $shopping_wallet_history->payment_mode = 'Mobile Recharge';
                        $shopping_wallet_history->type = ShoppingWalletHistory::TYPE_DEBIT;
                        $shopping_wallet_history->status = ShoppingWalletHistory::STATUS_COMPLETED;
                        $shopping_wallet_history->save();

                        // Deduct shopping wallet balance
                        $update_user = User::find(Auth::user()->id);
                        $update_user->shopping_wallet_bal -= $recharge->amount_usd;
                        $update_user->save();
                        
                        //added by vivekchand start here
                        //6 percent cashback
                        
                        $settings = Settings::where('id', '=', '1')->first();
                        $cashbackPer = $settings->cashbackper;
                        
                        // Add shopping wallet history
                        $shopping_wallet_history = new ShoppingWalletHistory();
                        $shopping_wallet_history->user_id = Auth::user()->id;
                        $shopping_wallet_history->amount = (($cashbackPer*0.01)*$recharge->amount_usd);
                        $shopping_wallet_history->payment_mode = 'Mobile Recharge Cashback';
                        $shopping_wallet_history->type = ShoppingWalletHistory::TYPE_ADDED;
                        $shopping_wallet_history->status = ShoppingWalletHistory::STATUS_COMPLETED;
                        $shopping_wallet_history->save();
                        
                        //add funds to user's account
                        $add_cashback = User::find(Auth::user()->id);
                        $add_cashback->shopping_wallet_bal += (($cashbackPer*0.01)*$recharge->amount_usd);
                        $add_cashback->save();
                        
                        $userSchema = User::find(Auth::user()->id);
                        $cashbackDetails = array('message' => 'Congratulation!!! Cashback of USD '.(($cashbackPer*0.01)*$recharge->amount_usd).' added to shopping wallet');
                        Notification::send($userSchema, new MobileRechargeCashbackNotification($cashbackDetails));
                        
                        //added by vivekchand end here

                        DB::commit();
                        return redirect()->route('mobilerecharge')->with('message', 'Mobile Recharge Successful');
                    } else {
                        // Change mobile recharge status
                        $update_recharge = MobileRecharge::find($recharge->id);
                        $update_recharge->status = 2;
                        $update_recharge->response = json_encode($response['message']);
                        $update_recharge->save();
                        DB::commit();
                        return redirect()->route('mobilerecharge')->with('message', 'Mobile Recharge Failed');
                    }
                }
            }
            return view('user.mobile_recharge_new')->with($data);
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->route('mobilerecharge')->with('message', $e->getMessage());
        }
    }

    public function admin_mobile_recharge()
    {
        return view('admin.mobile_recharge')
            ->with(array(
                'title' => 'Manage Mobile Recharge',
                'recharges' => MobileRecharge::with('user')->latest()->get(),
                'settings' => Settings::where('id', '=', '1')->first(),
            ));
    }
}
