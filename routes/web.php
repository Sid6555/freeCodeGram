<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Users;
use App\Http\Controllers\InstagramUsers;
use App\Http\Controllers\login;
use App\Http\Controllers\ExchangeRate;
use App\Http\Controllers\Schools;

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

Route::get('/', function () {
    //return view('welcome', array('name'=>$name));

    // return redirect('hello');
    // var_dump(session());
    if(session('session')){
        return view('welcome');
    }
    return view('hello', ['name'=>'guest', 'id'=>0]);
});

Route::get('/hello', function () {
    //echo $name;
    var_dump(session()->has('user'));
    var_dump(session('user'));
    return view('hello', ['name'=>'tuktuk', 'id'=>1]);
});

Route::view("about", 'about');
Route::view("contact", 'contact');


// Rending a view through a controller
Route::post('/users/{id}', [Users::class, 'index']);

Route::get('/instagramusers/{id}', [InstagramUsers::class, 'index']);

Route::post("login", [login::class, 'login']);

Route::post("/instagramusers/fileupload", [InstagramUsers::class, 'fileupload']);

Route::get('/exchangerate', [ExchangeRate::class, 'setHeader']);

Route::get('/listSchools', [Schools::class, 'listSchools']);
// End of rendering a view through a controller.

Route::get('/logout', function(){
    if(session()->has('user')){
        session()->pull('user');
    }
    return redirect('hello');
});

Route::view('fileupload', 'fileupload');
