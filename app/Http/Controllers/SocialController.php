<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Input;
use Illuminate\Http\Request;
use OAuth;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Redirect;
use App\Model\User;
use Auth;
use Session;

class SocialController extends Controller
{


    public function logout(){
        Auth::logout();
        return Redirect::route('user');
    }




    public function show()
    {
        $data = array();

        if (Auth::check()) {
            $data = Auth::user();
        }
        return View::make('user', array('data'=>$data));
    }







//complete
    public function loginWithFacebook() {

        $code = \Input::get( 'code' );

        $fb = \OAuth::consumer( 'Facebook' );

        if ( !empty( $code ) ) {

            try {

                $token = $fb->requestAccessToken( $code );

                $result = json_decode($fb->request( '/me?fields=id,last_name,name,email,picture,gender,education,birthday,hometown' ), true);

            } catch (Exception $e) {
                die("Too many requests, access denied by Facebook. Please wait a while.");
            }


            //$user = User::where('email','=',$result['email'])->first();
            $user = User::where('fb_id','=',$result['id'])->first(); // check if user already exist 

            if (empty($user)) {

                $user = new User;
                $user->username = $result['last_name'];
                $user->email = $result['email'];
                $user->password = Hash::make($result['id']);
                $user->fb_id = $result['id'];
                if($user->save()) {

                    $profile = new Profile();
                    $profile->name = $result['name'];
                    $profile->gender = $result['gender'];
                    $profile->dob = $result['birthday'];
                    $profile->hometown= $result['hometown'];
                    $profile->img_url = 'https://graph.facebook.com/'.$result['id'].'/picture?type=large';
                    $profile = $user->profile()->save($profile); // inserting data into UserInfo  through userInfo method(one to one relation) with respect to foreign key on User model . this is getting $user id
                    $user = $profile->user; 
                }

            }
            //$profile = User::where('email','=',$result['email'])->first();
            //$user = $profile->id;
            \Auth::login($user);
            Session::put('email', Auth::user()->email);
            Session::put('fb_id', Auth::user()->id);

            return Redirect::to('/')->with('message', 'Logged in with Facebook');

        }
        // if not ask for permission first
        else {
            // get fb authorization
            $url = $fb->getAuthorizationUri();

            // return to facebook login url
            return Redirect::to( (string)$url );
        }

    }








    public function loginWithGoogle() {
        $code = Input::get( 'code' );
        $googleService = OAuth::consumer( 'Google' );

        if ( !empty( $code ) ) {
            try {
                $token = $googleService->requestAccessToken( $code );

                $result = json_decode( $googleService->request( 'https://www.googleapis.com/oauth2/v1/userinfo' ), true );

                // return $result;

            } catch (Exception $e) {
                die("Too many requests, access denied by Google. Please wait a while.");
            }

            $profile = User::where('email','=', $result['email'])->first();
            if (empty($profile)) {

                $user = new User;
                $user->fb_id = $result['id'];
                $user->username = $result['family_name'];
                $user->email = $result['email'];
                $user->password = Hash::make($result['id']);
                $user->save();

            }

            $profile = User::where('email','=', $result['email'])->first();
             $user = $profile->id;
            \Auth::loginUsingId($user);
            Session::put('email', Auth::user()->email);
            return Redirect::to('/')->with('message', 'Logged in with Google');
        }

        // if not ask for permission first
        else {
            // get googleService authorization
            $url = $googleService->getAuthorizationUri();

            // return to google login url
            return Redirect::to( (string)$url );
        }
    }



}
