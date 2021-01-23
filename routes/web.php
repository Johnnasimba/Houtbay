<?php

use App\Http\Controllers\HoutbayController;
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
Route::group(['middleware'=>['customAuth']], function()
   {
      Route::get('Admin', 'HoutbayController@Admin');
      Route::get('Admin/addApplicant', 'HoutbayController@addApplicant');
      
    });

Route::post('Admin', 'HoutbayController@post');
Route::get('/', 'HoutbayController@index');
Route::get('login', 'HoutbayController@getlogin');
Route::post('login', 'HoutbayController@login');
Route::get('logout', 'HoutbayController@logout'); 
Route::get('about', 'HoutbayController@about'); 
Route::get('/browse/{jobType}', 'HoutbayController@browse');
Route::get('search', 'HoutbayController@search'); 
Route::get('/{id}', 'HoutbayController@details');
Route::post('/client/{id}', 'HoutbayController@clientPost');
Route::post('/details/{id}', 'HoutbayController@postRates');
