<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Coinbase\Wallet\Client;
use Coinbase\Wallet\Configuration;
use Coinbase\Wallet\Enum\Param;
use Coinbase\Wallet\Exception\TwoFactorRequiredException;
use Coinbase\Wallet\Resource\Transaction;
use Coinbase\Wallet\Resource\Deposit;
use Coinbase\Wallet\Resource\PaymentMethod;
use Openclerk\OAuth2\Client\Provider\Coinbase;
use Session;

class BuySellController extends Controller
{
    public function index()
    {

        $apiKey = env('COINBASE_API_KEY', '');
        $apiSecret = env('COINBASE_API_SECRET', '');
         
        $provider = new Coinbase([
          'clientId'      => '405361e360a666d4579f3c3eebd80baa5d5f155a602c23a5f472803b8e90a97a',
          'clientSecret'  => '8d58aba30026e1b691da1ab998d328eb544feca9589e498032b8723798596a48',
          'redirectUri'   => 'https://www.bittrade.biz/dashboard/buy-sell',
          'scopes'        => ['user', 'balance'],
          'state' => md5(uniqid(rand(), true))
        ]);
        
        
        if (!isset($_GET['code'])) {
          $authUrl = $provider->getAuthorizationUrl();
          session(['oauth2state' => $provider->state]);
          
          return redirect()->away($authUrl);
        } 
        elseif (empty($_GET['state']) || ($_GET['state'] !== session('oauth2state'))) {

            session()->forget('oauth2state');
          exit('Invalid state');
        } 
        else {
            
          // Try to get an access token (using the authorization code grant)
          $token = $provider->getAccessToken('authorization_code', [
              'code' => $_GET['code']
          ]);
          
        //   echo '<pre>';
        //   print_r($token);
        
          // Optional: Now you have a token you can look up a users profile data
          try {
        
            // We got an access token, let's now get the user's details
            $userDetails = $provider->getUserDetails($token);
        
            // Use these details to create a new profile
            printf('Hello %s!', $userDetails->firstName);
        
            // You can also get Coinbase balances
            $balanceDetails = $provider->getBalanceDetails($token);
        
            printf('You have %f %s', $balanceDetails['amount'], $balanceDetails['currency']);
        
          } catch (Exception $e) {
        
            // Failed to get user details
            exit('Oh dear...');
          }
        
          // Use this to interact with an API on the users behalf
          echo $token->accessToken;
        
          // Use this to get a new access token if the old one expires
          echo $token->refreshToken;
        
          // Number of seconds until the access token will expire, and need refreshing
          echo $token->expires;
        }

//        return view('buysell.index');
    }
}
