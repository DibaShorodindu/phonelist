<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\PhoneListUserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    protected $email;
    protected $password;
    protected $emailAuth;
    protected $passwordAuth;
    protected $data;

    public function userRegister()
    {
        return view('user.userRegister');
    }
    public function newUser(Request $request)
    {
        PhoneListUserModel::newPhoneListUserModel($request);
        return redirect('/')->with('message', 'Created Successfully');
    }
    public function userLogin()
    {
        return view('user.userLogin');
    }
    public function userLoginAuth(Request $request)
    {
        return view('user.userLogin');
    }
    public function userAuth(Request $request)
    {

        $connect = mysqli_connect("localhost", "root", "", "phonelist");
        session_start();
            $email = mysqli_real_escape_string($connect,$_POST['email']);
            $password = mysqli_real_escape_string($connect,$_POST['password']);

            $sql = "SELECT id FROM phone_list_user_models WHERE email = '$email' and password = '$password'";
            $result = mysqli_query($connect,$sql);
            $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
            $count = mysqli_num_rows($result);
            if($count == 1) {
                $_SESSION['email'] = $email;
                $_SESSION['login_user'] = $email;

                return redirect('/')->with('message', 'login Successfully');
            }else {
                return redirect()->back()->with('message', 'Email and/or password do not match with any of our records.');
            }
    }

    public function handleGoogleRegister($userArray)
    {
        $this->data = $userArray;
        return view('user.', ['newUserData'=>$this->data]);
    }

}
