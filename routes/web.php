<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PayPalController;
use App\Http\Controllers\IndexController;
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

Auth::routes();
Route::feeds();

Route::get('process-transaction', [PayPalController::class, 'processTransaction'])->name('processTransaction');
Route::get('success-transaction', [PayPalController::class, 'successTransaction'])->name('successTransaction');
Route::get('cancel-transaction', [PayPalController::class, 'cancelTransaction'])->name('cancelTransaction');
Route::get('create-transaction', [PayPalController::class, 'createTransaction'])->name('createTransaction');

Route::get('/', function () {
    return view('pages/index');
});

Route::get('/subscription', function() {
    return view('pages/subscription');
})->name('subscription');;

Route::get('/subscription/summary', function() {
    return view('pages.subscriptionSummary');
});

Route::get('/pay', function(){
    return view('pages/subscriptionSummary');
});

Route::get('/dashboard/writingpanel', [IndexController::class, 'writingPanel'])->name('writingpanel');
Route::get('/dashboard/writing', [IndexController::class, 'writing']);
Route::get('/profile/userprofile', [IndexController::class, 'userprofile']);
Route::get('/pressrelease/view', [IndexController::class, 'pressview'])->name('pressreleaseName');
Route::get('/pressrelease', [IndexController::class, 'pressrelease']);
Route::post('/pressrelease/create', [IndexController::class, 'pressreleaseCreate']);
Route::post('/writing/create', [IndexController::class, 'writingCreate']);




Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::patch('/users/update/{id}',[IndexController::class, 'usersUpdate'])->name('users.update');
Route::patch('/change/password',[IndexController::class, 'changePassword'])->name('change.password');
Route::get('/presses/{press}', [IndexController::class, 'show'])->name('press.show');
Route::get('/profile/viewprofile', [IndexController::class, 'viewProfile'])->name('profileViewprofile');
Route::get('/profile', [IndexController::class, 'businessProfile']);
Route::post('/profile/create', [IndexController::class, 'businessProfileCreate']);


Route::get('/guideline', [IndexController::class, 'guideline']);
