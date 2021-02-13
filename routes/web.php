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

Auth::routes(['verify' => true]); 


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/subscribebook/{id}', [App\Http\Controllers\HomeController::class, 'subscribeBook']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');


Route::group(['middleware' => ['admin']], function () {
    Route::get('/dashboard', function () {
    	return view('admin.dashboard');
	});

	Route::get('/user', [App\Http\Controllers\Admin\DashboardController::class, 'registeredUsers'])->name('registeredusers');
	Route::get('/adduser', [App\Http\Controllers\Admin\DashboardController::class, 'addUser'])->name('adduser');
	Route::post('/createuser', [App\Http\Controllers\Admin\DashboardController::class, 'createUser'])->name('createuser');
	Route::get('/edituser/{id}', [App\Http\Controllers\Admin\DashboardController::class, 'editUser'])->name('edituser');
	Route::put('/updateuser/{id}', [App\Http\Controllers\Admin\DashboardController::class, 'updateUser'])->name('edituser');
	Route::get('/deleteuser/{id}', [App\Http\Controllers\Admin\DashboardController::class, 'deleteUser'])->name('deleteuser');
	/* Routes for book management */
	Route::get('/books', [App\Http\Controllers\Admin\BookController::class, 'getAllbooks'])->name('getallbooks');
	Route::get('/addbook', [App\Http\Controllers\Admin\BookController::class, 'addBook'])->name('addbook');
	Route::post('/createbook', [App\Http\Controllers\Admin\BookController::class, 'createBook'])->name('createbook');
	Route::get('/editbook/{id}', [App\Http\Controllers\Admin\BookController::class, 'editBook'])->name('editbook');
	Route::put('/updatebook/{id}', [App\Http\Controllers\Admin\BookController::class, 'updateBook'])->name('updatebook');
	Route::get('/deletebook/{id}', [App\Http\Controllers\Admin\BookController::class, 'deleteBook'])->name('deletebook');
	/* Books routes end */

	/* Routes for subscription management */
	Route::get('/subscriptions', [App\Http\Controllers\Admin\SubscriptionController::class, 'getAllsubscriptions'])->name('getallsubscriptions');
	Route::get('/deletesubscription/{id}', [App\Http\Controllers\Admin\SubscriptionController::class, 'deleteSubscription'])->name('deletesubscription');
	/* Books routes end */




});


