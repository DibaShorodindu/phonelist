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
}
