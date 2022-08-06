<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Settings;
use App\Models\Plans;
use App\Models\Agent;
use App\Models\User_plans;
use App\Models\Admin;
use App\Models\Faq;
use App\Models\Images;
use App\Models\Testimony;
use App\Models\Content;
use App\Models\Asset;
use App\Models\Mt4dDtails;
use App\Models\Deposit;
use App\Models\Wdmethod;
use App\Models\Withdrawal;
use App\Models\Cp_transaction;
use Illuminate\Support\Facades\DB;
use App\Models\Tp_Transaction;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Paystack;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Requests;

use App\Mail\NewNotification;
use Illuminate\Support\Facades\Mail;

use App\Http\Traits\CPTrait;
use App\Mail\DepositSuccess;

class PaystackController extends Controller
{
    use CPTrait;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */


      /**
     * Redirect the User to Paystack Payment Page
     * @return Url
     */

    public function redirectToGateway()
    {
        try{
            return Paystack::getAuthorizationUrl()->redirectNow();
        }catch(\Exception $e) {
            return Redirect::back()->withMessage(['message'=>'The paystack token has expired. Please refresh the page and try again.', 'type'=>'error']);
        }
    }

    /**
     * Obtain Paystack payment information
     * @return void
     */
    public function handleGatewayCallback()
    {
        $paymentDetails = Paystack::getPaymentData();
        //dd($paymentDetails);
        $payamount = $paymentDetails['data']['amount'];
        $txn_ref = $paymentDetails['data']['reference'];
        $amount = $payamount/100;

        $user=User::where('id',Auth::user()->id)->first();

        //save and confirm the deposit
          $dp=new Deposit();
          $dp->amount= $amount;
          $dp->txn_id= $txn_ref;
          $dp->payment_mode= "Paystack";
          $dp->status= 'Processed';
          $dp->proof= "Paystack";
          $dp->plan= "0";
          $dp->user= $user->id;
          $dp->save();

        //add funds to user's account
        User::where('id',$user->id)
        ->update([
        'account_bal' => $user->account_bal + $amount,
        ]);

        //get settings
        $settings=Settings::where('id', '=', '1')->first();
        $earnings=$settings->referral_commission*$amount/100;

        if(!empty($user->ref_by)){
          //increment the user's referee total clients activated by 1
          Agent::where('agent',$user->ref_by)->increment('total_activated', 1);
          Agent::where('agent',$user->ref_by)->increment('earnings', $earnings);

          //add earnings to agent balance
          //get agent
          $agent=User::where('id',$user->ref_by)->first();
          User::where('id',$user->ref_by)
          ->update([
          'account_bal' => $agent->account_bal + $earnings - ($earnings * 20 / 100),
          'ref_bonus' => $agent->ref_bonus + $earnings,
          'shopping_wallet_bal' => $agent->shopping_wallet_bal + ($earnings * 20 / 100)
          ]);

          Tp_Transaction::create([
            'user' => $agent->id,
            'plan' => "Credit",
            'amount' => $earnings,
            'fromUser' => $user->id,
            'type' => "Ref Bonus",
            'remark' => "Level 1 Ref Bonus from " . $user->name,
        ]);


        Tp_Transaction::create([
            'user' => $agent->id,
            'plan' => "Credit",
            'amount' => ($earnings * 20 / 100),
            'fromUser' => $user->id,
            'type' => "Ref Bonus",
            'remark' => "Level 1 Ref Bonus as shopping wallet " . $user->name,
        ]);

          //credit commission to ancestors
          $deposit_amount = $amount;
          $array=User::all();
          $parent=$user->id;
          $this->getAncestors($array, $deposit_amount, $parent,1,$user->id);

        }

         //send email notification
        $objDemo = new \stdClass();
        $objDemo->name = $user->name;
        $objDemo->amount = $settings->currency.$amount;
        $objDemo->subject = "Deposit Successful";

        Mail::to($user->email)->send(new DepositSuccess($objDemo));

        return redirect()->route('deposits')
        ->with('message', 'Payment Successful');
    }
}
