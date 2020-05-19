<?php

use App\Http\Controllers\VoluntaryWorkController;
use App\model\Animal;
use App\model\AnimalUser;
use App\User;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

// // For testing
// Route::get('/', function (User $user) {
//     $users = $user->with('tasks')->get();
//     dd($users);
// });

Auth::routes();

// HOME
Route::get('/', 'HomeController@index')->name('home');

// DONATE ROUTES
Route::get('/donate', 'StripePaymentController@index');
Route::post('/donate', 'StripePaymentController@charge');

// CONTACT PAGE ROUTE
Route::get('/contact', 'ContactPageController@contact');

// ABOUT US PAGE ROUTE
Route::get('/about-us', 'AboutUsPageController@aboutus');

// Voluntary Work page Route
// Route::get('/voluntary-work','VoluntaryWorkController@voluntary');
Route::get('/voluntary-work', 'VoluntaryWorkController@show');
Route::get('/voluntary-work/subscribe/{id}', 'VoluntaryWorkController@subscribe')->name('voluntary.subscribe');
Route::get('/voluntary-work/unsubscribe/{id}', 'VoluntaryWorkController@unsubscribe')->name('voluntary.unsubscribe');

// PETS ROUTE
Route::get('/pets', 'PetsController@index');
Route::get('/pet/edit/{id}', 'PetsController@edit')->name('pet.edit');
Route::get('/pet/create', 'PetsController@create');
Route::post('/pet/create', 'PetsController@store');
Route::put('/pet/edit/{id}', 'PetsController@update');
Route::get('/pet/show/{id}', 'PetsController@show')->name('pet.show');
Route::put('/pet/enable/{id}', 'PetsController@enable');
Route::put('/pet/disable/{id}', 'PetsController@disable');
Route::put('/pet/return/{id}', 'PetsController@return');
Route::get('/pet/afs/{action}/{id}', 'PetsController@afsShow');
Route::put('/pet/afs/{action}/{id}', 'PetsController@afs')->name('pet.afs');

// PERSONAL AREA
// SHOW
Route::get('/personal-area/{id}', 'PersonController@show')->name('show.person');

// EDIT
Route::get('/personal-area/{id}/edit','PersonController@edit')->name('edit.person');
Route::put('/personal-area/{id}/edit','PersonController@update');
