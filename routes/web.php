<?php

use App\Http\Controllers\UserAuth\ForgotPasswordController;
use App\Http\Controllers\Front\CountryController;
use App\Http\Controllers\User\Searching\TypeaheadController;
use App\Http\Controllers\User\SocialController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/




            //Admin Dashboard
Route::get('/adminDashboard',[
    'uses' => 'App\Http\Controllers\AdminController@index',
    'as' => '/adminDashboard',
]);


            //public home page
Route::get('/',[
    'uses' => 'App\Http\Controllers\PublicController@home',
    'as' => '/',
]);
Route::get('/category/{id}',[
    'uses' => '\App\Http\Controllers\PublicController@category',
    'as'   => 'category',
]);
Route::get('/convert-to-json', function () {
    return App\Http\Controllers\PublicController::paginate(5);
});
Route::get('/user/{id}',[
    'uses' => '\App\Http\Controllers\PublicController@user',
    'as'   => 'user',
]);

Route::get('/userSearch',[
    'uses' => '\App\Http\Controllers\PublicController@userSearch',
    'as'   => 'userSearch',
]);

Route::get('/country/{id}',[
    'uses' => '\App\Http\Controllers\PublicController@country',
    'as'   => 'country',
]);
Route::get('/phonelistUserRegister',[
    'uses' => 'App\Http\Controllers\User\UserController@userRegister',
    'as' => '/phonelistUserRegister',
]);
Route::post('/phonelistUserRegisterAdd',[
    'uses' => 'App\Http\Controllers\User\UserController@newUser',
    'as' => '/phonelistUserRegisterAdd',
]);
Route::get('/phonelistUserLogin',[
    'uses' => 'App\Http\Controllers\User\UserController@userLogin',
    'as' => '/phonelistUserLogin',
]);
Route::post('/phonelistUserLoginAuth',[
    'uses' => 'App\Http\Controllers\User\UserController@userAuth',
    'as' => '/phonelistUserLoginAuth',
]);


/** Google OAuth routes */
Route::get('/auth/google',[
    'uses' => 'App\Http\Controllers\User\GoogleController@handleGoogleRedirect',
    'as' => '/auth/google',
]);
Route::get('user/google/callback',[
    'uses' => 'App\Http\Controllers\User\GoogleController@handleGoogleCallback',
    'as' => 'user/google/callback',
]);
Route::get('/loginWithGoogle{id}',[
    'uses' => 'App\Http\Controllers\User\GoogleController@handleGoogleCallbackRegister',
    'as' => '/loginWithGoogle',
]);

/** Email OAuth routes */
Route::post('/user/email/callback',[
    'uses' => 'App\Http\Controllers\User\EmailController@handleEmailCallback',
    'as' => '/user/email/callback',
]);


/** Facebook OAuth routes */
Route::get('auth/facebook', [SocialController::class, 'facebookRedirect']);
Route::get('auth/facebook/callback', [SocialController::class, 'loginWithFacebook']);

/** search routes */
Route::get('/autocomplete-search', [TypeaheadController::class, 'autocompleteSearch']);
//Route::get('/autocomplete-country-search', [TypeaheadController::class, 'autocompleteSearch']);


            //import-export Admin Dashboard


Route::get('/welcome',[
    'uses' => 'App\Http\Controllers\PublicController@index',
    'as' => 'public.Dashboard',
]);
Route::get('/file-import-export', [
    'uses' => '\App\Http\Controllers\AdminController@fileImportExport',
    'as' => 'file-import-export'
    ]);
Route::post('/file-import', [
    'uses' => '\App\Http\Controllers\AdminController@fileImport',
    'as' => 'file-import'
]);

Route::get('/convert-to-json', function () {
    return App\Models\PhoneList::paginate(5);
});


            //view all phoneList data from admin dashboard
            //manage edit update delete


Route::get('/view-all',[
    'uses' => '\App\Http\Controllers\AdminController@manageData',
    'as'   => 'view-all',
]);
Route::get('/edit-data/{id}',[
    'uses' => '\App\Http\Controllers\AdminController@editData',
    'as'   => 'edit-data',
]);
//Route::get('/edit-data/{id}','\App\Http\Controllers\AdminController@editData');
Route::post('/update-data',[
    'uses' => '\App\Http\Controllers\AdminController@updateData',
    'as'   => 'update-data',
]);
Route::get('/delete-data/{id}',[
    'uses' => '\App\Http\Controllers\AdminController@deleteData',
    'as'   => 'delete-data',
]);



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Auth::routes();

Route::get('/home', '\App\Http\Controllers\HomeController@index')->name('home');
Route::get('admin/home', '\App\Http\Controllers\HomeController@handleAdmin')->name('admin.route')->middleware('admin');



/** reset password*/
Route::get('forget-password', [ForgotPasswordController::class, 'showForgetPasswordForm'])->name('forget.password.get');
Route::post('forget-password', [ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post');
Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::post('reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');
