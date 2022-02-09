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
            $isUser = PhoneListUserModel::where('id', $user->id)->first();

            if($isUser){
                //Auth::login($isUser);
                return redirect('/');
            }else{
                return view('user.userGoogleRegister', ['newUserData'=>$user]);
            }

        } catch (Exception $exception) {
            dd($exception->getMessage());
        }
    }
}
