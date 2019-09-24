<?php

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
    return view('welcome');
});
Route::get('/calculator', function () {
    return view('calculator');
});
Route::post('/calculator', function (Illuminate\Http\Request $request) {
    $name = $request->detail;
    $price = $request->price;
    $discount= $request->discount;
    $discountAmount = $price*$discount*0.01;
    $priceCalculate = $price - $discountAmount;
    return view('result', compact(['name', 'price', 'discount', 'discountAmount', 'priceCalculate']));
});
