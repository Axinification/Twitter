<?php

namespace App\Http\Controllers;

use Request;
use Session;
use Redirect;


class TwitterController extends Controller
{
    public function login() {
            // your SIGN IN WITH TWITTER  button should point to this route
            $sign_in_twitter = true;
            $force_login = false;
        
            // Make sure we make this request w/o tokens, overwrite the default values in case of login.
            \Twitter::reconfig(['token' => '', 'secret' => '']);
            $token = \Twitter::getRequestToken(route('twitter.callback'));
        
            if (isset($token['oauth_token_secret']))
            {
                $url = \Twitter::getAuthorizeURL($token, $sign_in_twitter, $force_login);
        
                Session::put('oauth_state', 'start');
                Session::put('oauth_request_token', $token['oauth_token']);
                Session::put('oauth_request_token_secret', $token['oauth_token_secret']);
        
                return Redirect::to($url);
            }
        
            @abort(404);
        }

        public function callback() {
            // You should set this route on your \Twitter Application settings as the callback
            // https://apps.twitter.com/app/YOUR-APP-ID/settings
            if (Session::has('oauth_request_token'))
            {
                $request_token = [
                    'token'  => Session::get('oauth_request_token'),
                    'secret' => Session::get('oauth_request_token_secret'),
                ];
        
                \Twitter::reconfig($request_token);
        
                $oauth_verifier = false;
        
                if (Request::has('oauth_verifier'))
                {
                    $oauth_verifier = Request::get('oauth_verifier');
                    // getAccessToken() will reset the token for you
                    $token = \Twitter::getAccessToken($oauth_verifier);
                }
        
                if (!isset($token['oauth_token_secret']))
                {
                    return Redirect::route('twitter.error')->with('flash_error', 'We could not log you in on \Twitter.');
                }
        
                $credentials = \Twitter::getCredentials();
        
                if (is_object($credentials) && !isset($credentials->error))
                {
                    
                    
                    //dd($credentials);
                    //Auth::login($credentials.$screen_name);

                    
                    // $credentials contains the \Twitter user object with all the info about the user.
                    // Add here your own user logic, store profiles, create new users on your tables...you name it!
                    // Typically you'll want to store at least, user id, name and access tokens
                    // if you want to be able to call the API on behalf of your users.
        
                    // This is also the moment to log in your users if you're using Laravel's Auth class
                    // Auth::login($user) should do the trick.
                    $data = json_encode($credentials);
                    return view('profile')->with('data', $data);
                    // Session::put('access_token', $token);
                    // Session::put('credentials', $credentials);
                    // Session::save();
                    // return Redirect::to('profile')->with('flash_notice', 'Congrats! You\'ve successfully signed in!');
                }
                @abort(404);
            }
        }
    }
