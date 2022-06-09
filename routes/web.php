<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BibliografiController;
use App\Http\Controllers\KoleksiController;
use App\Http\Controllers\MemberController;

use App\Http\Controllers\SirkulasiController;
use App\Http\Controllers\PengembalianController;
use App\Models\koleksi;
use App\Models\member;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home')->middleware('auth');

Route::group(['middleware' => 'auth'], function () {
	Route::get('table-list', function () {
		return view('pages.table_list');
	})->name('table');

	Route::get('typography', function () {
		return view('pages.typography');
	})->name('typography');

	Route::get('icons', function () {
		return view('pages.icons');
	})->name('icons');

	Route::get('map', function () {
		return view('pages.map');
	})->name('map');

	Route::get('notifications', function () {
		return view('pages.notifications');
	})->name('notifications');

	Route::get('rtl-support', function () {
		return view('pages.language');
	})->name('language');

	Route::get('upgrade', function () {
		return view('pages.upgrade');
	})->name('upgrade');
    // Route CRUD bibliografi
    Route::resource('bibliografis', BibliografiController::class);

    //  Route CRUD Koleksi
    Route::resource('koleksis', KoleksiController::class);
    // Route::get('/koleksis', [KoleksiController::class, 'index'])
    //     ->name('koleksis.index');
    // Route::get('/koleksis/create', [KoleksiController::class, 'create'])
    //     ->name('koleksis.create');
    // Route::post('/koleksis', [KoleksiController::class, 'store'])
    //     ->name('koleksis.store'); 
    // Route::get('/koleksis/{koleksi}/edit', [KoleksiController::class,'edit'])
    //     ->name('koleksis.edit'); 
    // Route::put('/koleksis/{koleksi}', [KoleksiController::class,'update'])
    //     ->name('koleksis.update');
    // Route::delete('koleksis/{koleksi}', [KoleksiController::class, 'destroy'])
    //     ->name('koleksis.destroy');

    // Route CRUD Member
    Route::resource('members', MemberController::class);

    // Route CRUD Sirkulasi
    Route::resource('sirkulasis', SirkulasiController::class);

    Route::resource('pengembalians', PengembalianController::class);
});

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
});

