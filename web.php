<?php

use App\Customer;
use Illuminate\Http\Request;



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
    $customers = \App\Customer::all();
    return view('customers', ['customers' => $customers]);
});

Route::get('/register', function () {
    return view('register');
});

Route::post('/register', 'CustomersController@regd');

Route::delete('/customer/{customer}', function (Customer $customer) {
    $customer->delete();

    return redirect('/');
});





/*

