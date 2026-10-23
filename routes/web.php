<?php
use App\Http\Controllers\FormController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::resource('forms', FormController::class);
Route::group(['namespace' => 'App\Http\Controllers'], function (){

    Route::get('home', 'FormController@index')->name('indexpage');
    Route::get('contact_form' , 'FormController@create')->name('createpage');
    Route::post('store' , 'FormController@store')->name('storepage'); 
    
});
