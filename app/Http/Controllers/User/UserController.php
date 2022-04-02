<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Card;
use App\Models\ExportHistori;
use App\Models\PhoneList;
use App\Models\PhoneListUserModel;
use App\Models\PurchasePlan;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;
use Session;
use Illuminate\Support\Facades\Auth;
use Storage;
use Symfony\Component\Console\Input\Input;

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
        $validator = \Validator::make($request->all(), [
            'email' => 'required|email|unique:phone_list_user_models,email',
            'password' => 'required',
            'firstName' => 'required',
            'lastName' => 'required',
            'phone'=>'required|min:11|numeric|unique:phone_list_user_models',
            'country' => 'required',
        ]);
        if ($validator->fails()) {
            //$errors = $validator->errors();
            return redirect()->back()->with('message1', 'The email or phone number has already been taken');
        } else {
            $check = $this->create($data);
            $newUser = PhoneListUserModel::where('email', $data['email'])->first();
            $startDate = Carbon::now();
            $startDate = $startDate->toDateString();
            //$daysToAdd = 30;
            $endDate = Carbon::now()->addDays(30);
            PurchasePlan::create([
                'userId' => $newUser->id,
                'plan' => 'Free',
                'price' => 0,
                'credit' => 20,
                'phoneNumber'=> 20,
                'dataFilter' => 'Basic Filters',
                'csvExport'=> 'CSV Export',
                'start' => $startDate,
                'end' => $endDate->format('Y-m-d'),
            ]);
            return redirect("loggedInUser")->with('message2', 'data Updated Successfully');
        }
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


    /** start updating user information*/
    public function updateUserFirstName(Request $request, $id)
    {
        $this->user = PhoneListUserModel::where('id', $id)->update(['firstName' => $request->firstName]);
        return redirect()->back();

    }
    public function updateUserLastName(Request $request, $id)
    {
        $this->user = PhoneListUserModel::where('id', $id)->update(['lastName' => $request->lastName]);
        return redirect()->back();

    }
    public function updateUserPhone(Request $request, $id)
    {
        $this->user = PhoneListUserModel::where('id', $id)->update(['phone' => $request->phone]);
        return redirect()->back();

    }
    public function updateUserCountry(Request $request, $id)
    {
        $this->user = PhoneListUserModel::where('id', $id)->update(['country' => $request->country]);
        return redirect()->back();
    }
    public function updateUserEmail(Request $request, $id)
    {
        $this->user = PhoneListUserModel::where('id', $id)->update(['email' => $request->email]);
        return redirect()->back();

    }
    public function updateUserPassword(Request $request, $id)
    {
        $request->user()->fill([
            'password' => Hash::make($request->password)
        ])->save();
        return redirect()->back();

    }
    public function updateUserInfo()
    {
        dd(Request('id'));

        $id = Request('id');
        $option = PhoneListUserModel::where('id', $id)->first();
        $option->fristName = Request('fristName');
        $option->lastName = Request('lastName');
        //$option->phone = $this->user['phone'];
        //$option->country = $this->user['country'];
        //$option->update();
        /*$this->user = PhoneListUserModel::where('id', $id)->update(['country' => $request->country]);*/
        return redirect()->back();

    }
    /** end updating user information*/
    /** start add/updating user billing information*/

    public function addCardInfo(Request $request)
    {
        Card::create([
            'userId' => $request->userId,
            'firstName' => $request->firstName,
            'lastName' => $request->lastName,
            'creditCardNumber' => $request->creditCardNumber,
            'expirationDate' => $request->expirationDate,
            'cvc' => $request->cvc,
            'address' => $request->address,
            'city' => $request->city,
            'state' => $request->state,
            'country' => $request->country,
            'postalCode' => $request->postalCode,
        ]);
        return redirect()->route('billingRequest',['id' => $request->userId]);
    }
    public function updateCardInfo(Request $request)
    {
        Card::where('id', $request->cardId)->update([
            'userId' => $request->userId,
            'firstName' => $request->firstName,
            'lastName' => $request->lastName,
            'creditCardNumber' => $request->creditCardNumber,
            'expirationDate' => $request->expirationDate,
            'cvc' => $request->cvc,
            'address' => $request->address,
            'city' => $request->city,
            'state' => $request->state,
            'country' => $request->country,
            'postalCode' => $request->postalCode,
        ]);
        return redirect()->route('billingRequest',['id' => $request->userId]);
    }

    /** end add/updating user billing information*/

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
            $result = $request->email;
            $this->data = PhoneListUserModel::where('email', 'LIKE', $result. '%'  )->get();
            return redirect('loggedInUser')
                ->with( ['userData' => $this->data] )
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
        $this->allData = PhoneList::paginate(15);
        return view('userDashboard.people', ['allData' => $this->allData]);
    }
    public function peopleSearch(Request $request)
    {
        $result = $request->name;
        $this->allData = DB::table('phone_lists')
            ->where('name', 'like', $result.'%')
            ->paginate(15);
        return view('userDashboard.peopleSearch', ['allData' => $this->allData]);
    }
    public function genderSearch(Request $request)
    {
        $result = $request->gender;
        $this->allData = DB::table('phone_lists')
            ->where('gender', 'like', $result.'%')
            ->paginate(15);

        return view('userDashboard.genderSearch', ['allData' => $this->allData]);
    }

    public function relationshipSearch(Request $request)
    {
        $result = $request->relationship;
        $this->allData = DB::table('phone_lists')
            ->where('relationship_status', 'like', $result.'%')
            ->paginate(15);

        return view('userDashboard.genderSearch', ['allData' => $this->allData]);
    }
    public function locationSearch(Request $request)
    {
        $result = $request->location;
        $this->allData = DB::table('phone_lists')
            ->where('location', 'like', $result.'%')
            ->paginate(15);

        return view('userDashboard.genderSearch', ['allData' => $this->allData]);
    }
    public function hometownSearch(Request $request)
    {
        $result = $request->hometown;
        $this->allData = DB::table('phone_lists')
            ->where('hometown', 'like', $result.'%')
            ->paginate(15);

        return view('userDashboard.genderSearch', ['allData' => $this->allData]);
    }
    public function countrySearch(Request $request)
    {
        $result = $request->country;
        $this->allData = DB::table('phone_lists')
            ->where('country', 'like', $result.'%')
            ->paginate(15);

        return view('userDashboard.genderSearch', ['allData' => $this->allData]);
    }


    public function account()
    {
        return view('userDashboard.settings.account');
    }
    public function managePlan(Request $request)
    {
        $data = PurchasePlan::where('userId', $request->userId)->get();
        $items[0] = $data->last()->plan;
        $items[1] = 0;
        $items[2] = 0;
        $items[3] = $data->last()->price;
        $date = Carbon::createFromFormat('Y-m-d', $data->last()->start);
        $monthName = $date->format('M'); $year = $date->format('Y'); $day = $date->format('d');
        $items[4] = $monthName; $items[5] = $year; $items[6] = $day;
        $date2 = Carbon::createFromFormat('Y-m-d', $data->last()->end);
        $monthName2 = $date2->format('M'); $year2 = $date2->format('Y'); $day2 = $date2->format('d');
        $items[7] = $monthName2; $items[8] = $year2; $items[9] = $day2;
        $items[10] = $data->last()->start;
        $items[11] = $data->last()->end;
        foreach($data as $dataPlan) {
            $items[1] = $items[1] + $dataPlan->credit;
            $items[2] = $items[2] + $dataPlan->phoneNumber;
        }
        return view('userDashboard.settings.plans.managePlan', ['userPurchasePlan' => $items]);
    }
    public function billingRequest($userId)
    {
        $data = Card::where('userId', $userId)->get();
        return view('userDashboard.settings.plans.billing', ['userCardInfo' => $data]);
    }
    public function billing(Request $request)
    {
        $data = Card::where('userId', $request->userId)->get();
        return view('userDashboard.settings.plans.billing', ['userCardInfo' => $data]);
    }
    public function exports()
    {
       $data = ExportHistori::where('userId',Auth::user()->id)->orderBy('createdOn', 'desc')->paginate(6);
        return view('userDashboard.settings.exports.exports', ['exportHistory' => $data]);
    }
    public function reDownloadFile($file_name)
    {
        $data = ExportHistori::find($file_name);
        return response()->download('storage/'. $data->file,'phonelist.xlsx');
    }
    public function csvExportSettings()
    {
        return view('userDashboard.settings.exports.csv-export-settings');
    }
    public function current()
    {
        return view('userDashboard.settings.credits.current');
    }
    public function history()
    {
        return view('userDashboard.settings.credits.history');
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
