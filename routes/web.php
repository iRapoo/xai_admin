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

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('api/v2')->group(function () {

    //METHODS DEVICE
    Route::post('device', 'DeviceController@registration');
    Route::post('md5_device', 'DeviceController@check_md5');
    //METHODS SCHEDULE
    Route::get('list_group', 'ScheduleController@students');
    Route::get('list_teach', 'ScheduleController@teachers');
    Route::get('schedule', 'ScheduleController@schedule');
    Route::post('md5', 'ScheduleController@check_md5');

});
