<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\PhoneList;
use App\Models\PhoneListUserModel;
use Illuminate\Http\Request;
use Hash;
use Session;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    protected $email;
    protected $password;
    protected $emailAuth;
    protected $passwordAuth;
    protected $data;
    protected $id;
    protected $user;
    protected $allData;


    public function dashboard()
    {
        if(Auth::check()){
            return view('userDashboard.userDashboard');
        }
        return redirect('/phonelistUserLogin')->with('message','Oppes! You have entered invalid credentials');

    }
    /**
     * Write code on Method
     *
     * @return response()
     */

    public function userRegister()
    {
        return view('user.userRegister');
    }

    public function newUser(Request $request)
    {
        $data = $request->all();
        $check = $this->create($data);

        return redirect("loggedInUser")->with('message', 'data Updated Successfully');


    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function create(array $data)
    {
        return PhoneListUserModel::create([
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'firstName' => $data['firstName'],
            'lastName' => $data['lastName'],
            'name' => $data['firstName'].' '.$data['lastName'],
            'phone' => $data['phone'],
            'country' => $data['country'],
        ]);
    }

    public function userLogin()
    {
        return view('user.userLogin');
    }
    public function userLoginAuth(Request $request)
    {
        return view('user.userLogin');
    }

    /*
     * Write code on Method
     *
     * @return response()
     */
    public function userAuth(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect('loggedInUser')
                ->withSuccess('You have Successfully loggedin');
        }

        return redirect("/phonelistUserLogin")->with('message','Oppes! You have entered invalid credentials');


    }

    public function handleGoogleRegister($userArray)
    {
        $this->data = $userArray;
        return view('user.', ['newUserData'=>$this->data]);
    }

    public function people()
    {
        $this->allData = PhoneList::paginate(20);
        return view('userDashboard.people', ['allData' => $this->allData]);
    }

    public function account()
    {
        return view('userDashboard.settings.account');
    }

    public function upgradeUser()
    {
        return view('userDashboard.settings.upgrade');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function logout() {
        Session::flush();
        Auth::logout();

        return Redirect('/');
    }
}
