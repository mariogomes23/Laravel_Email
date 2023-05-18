<?php

use App\Mail\ExampleMain;
use App\Mail\Welcome;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get("/teste",function(){

    //return (new ExampleMain([]))->render();

    $user = User::find(1);

    Mail::to("teste@email")
    ->send(new Welcome);
    return redirect("/");
});
Route::get('/', function () {
    return view('welcome');
});
