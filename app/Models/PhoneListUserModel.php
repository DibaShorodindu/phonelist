<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhoneListUserModel extends Model
{
    use HasFactory;
    protected $fillable = [
        'email',
        'password',
        'firstName',
        'lastName',
        'phone',
        'country',
        'google_id',
    ];

    protected $hidden = [
        'remember_token',
    ];

    protected static $user;

    public static function newPhoneListUserModel($request)
    {
        self::$user = new PhoneListUserModel();
        self::$user->email              = $request->email;
        self::$user->password           = $request->password;
        self::$user->firstName          = $request->firstName;
        self::$user->lastName           = $request->lastName;
        self::$user->phone              = $request->phone;
        self::$user->country            = $request->country;
        self::$user->google_id           = $request->google_id;
        self::$user->save();
    }

    public static function newPhoneListUserModelByGoogle($request)
    {
        self::$user = new PhoneListUserModel();
        $split = explode(" ", $request->firstName);
        self::$user->email              = $request->email;
        self::$user->password           = $request->password;
        self::$user->firstName          = array_shift($split);
        self::$user->lastName           = implode(" ", $split);
        self::$user->phone              = $request->phone;
        self::$user->country            = $request->country;
        self::$user->google_id           = $request->google_id;
        self::$user->save();
    }

    public static function phoneListUserAuth($request)
    {

        self::$user = new PhoneListUserModel();

        self::$user->email              = $request->email;
        self::$user->password           = $request->password;
        self::$user->firstName          = $request->firstName;
        self::$user->lastName           = $request->lastName;
        self::$user->phone              = $request->phone;
        self::$user->country            = $request->country;
        self::$user->save();
    }

//    public static function updatePassword($request)
//    {
//        self::$user = PhoneListUserModel::find($request->email);
//
//        self::$user->password              = $request->password;
//        self::$user->save();
//    }

}
