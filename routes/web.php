<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\ContactController;
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

Route::get('login',[AdminController::class,'login'])->name('login');
Route::post('login',[AdminController::class,'login']);

Route::group(['middleware'=>'auth'],function(){
    Route::get('logout',[AdminController::class,'logout']);
    Route::get('home',[AdminController::class,'dashboard']);

    Route::group(['prefix'=>'lead'],function(){
        Route::get('add-lead',[AdminController::class,'add_lead']);
        Route::post('add-lead',[AdminController::class,'add_lead']);
        Route::get('manage-lead',[AdminController::class,'manage_lead']);
        Route::get('delete-lead/{id}',[AdminController::class,'delete_lead']);
        Route::get('edit-lead/{id}',[AdminController::class,'edit_lead']);
        Route::post('edit-lead/{id}',[AdminController::class,'edit_lead']);
        Route::get('view-lead/{id}',[AdminController::class,'view_lead']);
        Route::get('convert-lead/{id}',[AdminController::class,'convert_lead']);
        Route::post('convert-lead/{id}',[AdminController::class,'convert_lead']);
    });

    Route::group(['prefix'=>'account'],function(){
        Route::get('add-account',[AccountController::class,'add_account']);
        Route::post('add-account',[AccountController::class,'add_account']);
        Route::get('manage-account',[AccountController::class,'manage_account']);
        Route::get('delete-account/{id}',[AccountController::class,'delete_account']);
        Route::get('edit-account/{id}',[AccountController::class,'edit_account']);
        Route::post('edit-account/{id}',[AccountController::class,'edit_account']);
        Route::get('view-account/{id}',[AccountController::class,'view_account']);

    });

    Route::group(['prefix'=>'contact'],function(){
        Route::get('add-contact',[ContactController::class,'add_contact']);
        Route::post('add-contact',[ContactController::class,'add_contact']);
        Route::get('manage-contact',[ContactController::class,'manage_contact']);
        Route::get('delete-contact/{id}',[ContactController::class,'delete_contact']);
        Route::get('edit-contact/{id}',[ContactController::class,'edit_contact']);
        Route::post('edit-contact/{id}',[ContactController::class,'edit_contact']);
        Route::get('view-contact/{id}',[ContactController::class,'view_contact']);

    });

    Route::group(['prefix'=>'deal'],function(){
        Route::get('add-deal',[ContactController::class,'add_deal']);
        Route::post('add-deal',[ContactController::class,'add_deal']);
        Route::get('manage-deal',[ContactController::class,'manage_deal']);
        Route::get('delete-deal/{id}',[ContactController::class,'delete_deal']);
        Route::get('edit-deal/{id}',[ContactController::class,'edit_deal']);
        Route::post('edit-deal/{id}',[ContactController::class,'edit_deal']);
        Route::get('view-deal/{id}',[ContactController::class,'view_deal']);

    });
}) ;


Route::get('/', function () {
    return view('welcome');
});
