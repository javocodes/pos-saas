<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'storefront', 'as' => 'backEnd.'], function () {

    Route::get('/backEnd/dashboard', AdminDashboard::class)
        ->name('index');

    Route::get('/backend/dashboard/profile', AdminProfile::class)
        ->name('profile');

    Route::get('/backend/inbox', Adminindox::class);

    Route::get('/backEnd/inbox', Adminindox::class)
        ->name('inbox');

    Route::get('/backEnd/store/createStore', CreateStore::class)
        ->name('createStore');

    Route::get('/backEnd/store/CreateAssociate', CreateAsscoiate::class)
        ->name('createAssociate');

    Route::get('/backEnd/store/ViewDetails', ViewDetail::class)
        ->name('viewDetails');
});
