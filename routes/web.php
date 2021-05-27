<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RestoController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\AdminController;
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
    return view('index');
});

Route::post('registerUser',[RestoController::class,'registerUser']);
Route::post('loginUser',[RestoController::class,'login']);

Route::group(['middleware'=>'customAuth'],function(){
// Route::get('/list','RestoController@list');
//    Route::view('/add','add');
//    Route::post('addResto','RestoController@addResto');
    Route::view('register','registration');
    Route::view('login','login');
    Route::get('/logout',[RestoController::class,'lgout']);
    });
   
    
    Route::get('/about', function () {
        return view('customer\about'); });

/*    Route::get('/cart', function () {
        return view('cart'); });
*/        
    Route::get('/readItem',[ItemController::class,'create']);
    Route::post('/addItem',[ItemController::class,'store']);
    Route::get('/viewItem',[ItemController::class,'index']);

    Route::get('/menu',[ItemController::class,'viewM']);

    Route::get('/AdminHome',[AdminController::class,'adminviewhome']);
    Route::get('/CustHome',[AdminController::class,'custviewhome']);

    Route::get('/payment',[AdminController::class,'custpay']);
    Route::post('/paymentportal',[AdminController::class,'cpayportal']);
    Route::get('/paysuccess',[AdminController::class,'psuccess']);

    Route::get('/itemdetail/{id}/del',[ItemController::class,'del']);
Route::get('/itemdetail/{id}/edit',[ItemController::class,'edit']);
Route::post('/itemeditprocess/{id}/edit',[ItemController::class,'update']);
Route::post('/add_to_cart',[ItemController::class,'addToCart']);
Route::get('/cartlist',[ItemController::class,'cartList']);
Route::get('/removecart/{id}',[ItemController::class,'removeCart']);
Route::get('/ordernow',[ItemController::class,'orderNow']);
Route::post('/orderplace',[ItemController::class,'orderPlace']);
Route::get('/booking',[AdminController::class,'viewBooking']);
Route::get('/feedback',[AdminController::class,'fCreate']);
Route::get('/viewfeedback',[AdminController::class,'fView']);
Route::post('/ReadFeedback', [AdminController::class,'fStore']);



