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

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

/******************** Admin Area ***********************/
Route::prefix('ds-admin')->namespace('Admin')->group(function(){

    // Login
    Route::get('login', 'Auth\LoginController@showLoginForm')->name('admin.login');
    Route::post('login', 'Auth\LoginController@login');
    Route::post('logout', 'Auth\LoginController@logout')->name('logout');

    // Password Reset
    Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
    Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
    Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('admin.password.reset');
    Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('admin.password.update');

    Route::get('', 'HomeController@index')->name('admin.home');
});

Route::get('/home', 'HomeController@index')->name('home');

/******************** Public Area ************************/

$locales = config('app.locales');

Route::get('/', function (Request $request) {

    $locale = substr($request->headers->get('accept_language'), 0, 2) ?? config('app.fallback_locale');
    if (in_array($locale, config('app.locales'))) {
        App::setLocale($locale);

        return redirect("/{$locale}");

    } else {

        return redirect('/' . config('app.fallback_locale'));
    }
});

foreach ($locales as $locale) {
    Route::prefix($locale)->middleware('lang')->group(function () {

    });
}

Route::middleware('lang')->get('/{any}', function () {
    abort(404);
})->where('any', '.*');








