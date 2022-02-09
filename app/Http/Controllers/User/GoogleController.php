<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\PhoneListUserModel;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Jetstream\Events\AddingTeam;
use Laravel\Socialite\Facades\Socialite;

class GoogleController extends Controller
{
    CONST DRIVER_TYPE = 'google';
    public function handleGoogleRedirect()
    {
        return Socialite::driver(static::DRIVER_TYPE)->redirect();
    }

    public function handleGoogleCallback()
    {
        //echo 'hello';
        //return redirect()->route('/');
        try {

            $user = Socialite::driver(static::DRIVER_TYPE)->user();

            $userExisted = PhoneListUserModel::where('id', $user->id)->first();

            if( $userExisted ) {

                Auth::login($userExisted);

                return redirect()->route('/');

            }else {

                /*$newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'oauth_id' => $user->id,
                    'oauth_type' => static::DRIVER_TYPE,
                    'password' => Hash::make($user->id)
                ]);

                AddingTeam::dispatch($newUser);

                $newUser->switchTeam($team = $newUser->ownedTeams()->create([
                    'name' => $newUser->name . "'s Team",
                    'personal_team' => false
                ]));

                $newUser->update([
                    'current_team_id' => $newUser->id
                ]);

                Auth::login($newUser);*/
                return view('user.userGoogleRegister', ['newUserData'=>$user]);

                //return redirect()->route('/loginWithGoogle', ['user' => $user]);
            }


        } catch (Exception $e) {
            dd($e);
        }

    }
    public function handleGoogleCallbackRegister()
    {
        return view('user.userGoogleRegister');
    }
}
