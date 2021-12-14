<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\addArticle;
use App\Mail\RegistrationMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

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
    return view('user.homepage');
});
Route::get('/addArticle',function(){
    return view('user.add-article');
});
Route::post('/addArticle',[addArticle::class,'add']);
Route::get('/',[addArticle::class,'index']);

Route::get('/signup', function () {

    return view("user.signup");
});

Route::post('/signup',[addArticle::class,'sendEmail']);

Route::get('/email', function () {
    $token=Str::random(10);
    Mail::to('cwifak959@gmail.com')->send(new RegistrationMail($token));
    return new RegistrationMail($token);

});
Route::get('/email', function () {


});
