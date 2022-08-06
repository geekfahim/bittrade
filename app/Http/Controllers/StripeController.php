<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
use App\Models\User;
use App\Models\Wdmethod;
use App\Models\Withdrawal;
use App\Models\Cp_transaction;
use App\Mail\NewNotification;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;
use App\Http\Traits\CPTrait;
use App\Mail\DepositSuccess;
use App\Models\ShoppingWalletHistory;
use App\Models\Tp_Transaction;

class StripeController extends Controller
{

    public function submitpayment(Request $request)
    {
      $user=User::where('id',Auth::user()->id)->first();

      //end screenshot process
      if($request['pay_type']=='plandeposit'){
        //add the user to this plan for approval
        User::where('id',Auth::user()->id)
        ->update([
          'plan'=> $request['plan_id'],
        ]);
        $plan=$request['plan_id'];
      }elseif($request['pay_type'] == 'Subscription Trading'){
        $plan="Subscription Trading";
      }
      else{
        $plan=Auth::user()->plan;
      }

      //save and confirm the deposit
        $dp=new Deposit();
        $dp->amount= $request->amount;
        $dp->payment_mode= "Credit Card";
        $dp->status= 'Processed';
        $dp->proof= "Stripe";
        $dp->plan= $plan;
        $dp->user= $user->id;
        $dp->save();

      //add funds to user's account
      User::where('id',$user->id)
      ->update([
      'account_bal' => $user->account_bal + $request->amount,
      ]);

      //get settings
      $settings=Settings::where('id', '=', '1')->first();
      $earnings=$settings->referral_commission*$request->amount/100;

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
        $deposit_amount = $request->amount;
        $array=User::all();
        $parent=$user->id;
        $this->getAncestors($array, $deposit_amount, $parent,1,$user->id);

      }

      //send notification
      //send email notification
      $objDemo = new \stdClass();
      $objDemo->name = $user->name;
      $objDemo->amount = $settings->currency.$request->amount;
      $objDemo->subject = "Deposit Successful";

      Mail::to($user->email)->send(new DepositSuccess($objDemo));

      // Kill the session variables
      $request->session()->forget('plan_id');
      $request->session()->forget('pay_type');
      $request->session()->forget('payment_mode');
      $request->session()->forget('amount');
      $request->session()->forget('intent');

      return response()->json(['success'=>'Payment Completed, go to transaction history to Confirm your transaction was successful.']);
    }

    public function submit_wallet_payment(Request $request)
    {
      $user=User::where('id',Auth::user()->id)->first();

      //save and confirm the deposit
      $dp = new ShoppingWalletHistory();
      $dp->amount= $request->amount;
      $dp->payment_mode= "Credit Card";
      $dp->status= ShoppingWalletHistory::STATUS_COMPLETED;
      $dp->proof= "Stripe";
      $dp->user_id= $user->id;
      $dp->save();

      //add funds to user's account
      User::where('id',$user->id)->update([
        'shopping_wallet_bal' => $user->shopping_wallet_bal + $request->amount,
      ]);

      //get settings
      $settings = Settings::where('id', '=', '1')->first();

      //send email notification
      $objDemo = new \stdClass();
      $objDemo->name = $user->name;
      $objDemo->amount = $settings->currency.$request->amount;
      $objDemo->subject = "Deposit Successful";

      // Mail::to($user->email)->send(new DepositSuccess($objDemo));

      // Kill the session variables
      $request->session()->forget('plan_id');
      $request->session()->forget('pay_type');
      $request->session()->forget('payment_mode');
      $request->session()->forget('amount');
      $request->session()->forget('intent');

      return response()->json(['success'=>'Payment Completed, go to transaction history to Confirm your transaction was successful.']);
    }
}
