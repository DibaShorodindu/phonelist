<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\PhoneListUserModel;
use Illuminate\Http\Request;
use App\Models\User;
use Validator;
use Socialite;
use Exception;
use Auth;

class SocialController extends Controller
{
    public function facebookRedirect()
    {
        return Socialite::driver('facebook')->redirect();
    }
    public function loginWithFacebook()
    {
        try {

            $user = Socialite::driver('facebook')->user();
            $isUser = PhoneListUserModel::where('email', $user->email)->first();

            if($isUser){
                $saveUser = PhoneListUserModel::where('email', $user->email)->first();
            }else{
                //dd($user);
                $splitName = explode(' ', $user->name, 2);
                $firstname = $splitName[0];
                $lastname = !empty($splitName[1]) ? $splitName[1] : '';
                return view('user.userGoogleRegister', ['newUserData'=>$user, 'lastname' => $lastname, 'firstname' => $firstname]);
            }
            Auth::loginUsingId($saveUser->id);
            return view('userDashboard.userDashboard');

        } catch (Exception $exception) {
            dd($exception->getMessage());
        }
    }


}
