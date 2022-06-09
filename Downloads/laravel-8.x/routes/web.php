<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\User;


Route::post('/tokens/create', function (Request $request) {
    $token = $request->user()->createToken($request->token_name);
    
    return ['token' => $token->plainTextToken];
});
Route::get('/tokens/get', function (Request $request) {

    return "test";
    //return $token
});
Route::post('/tokens/create1', function (Request $request) {
    $token = $request->user()->createToken($request->token_name);
    return ['token' => $token->plainTextToken];
});
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
