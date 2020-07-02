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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function(){
	echo 'this is home page';
});

Route::get('/show-users/{id}', function($id){
	//get data
	$users = \App\User::find($id)->toArray();
})->name('user.show');

// Route::get('/users/{id}', function($id){
// 	echo 'this is user '. $id. ' page';
// });

Route::get('/users/{userId}/comments/{commentId}', function($userId, $commentId){
	echo 'this is comment '. $commentId. ' page of user '.$userId;
});


Route::group(['prefix' => 'admin', 'as' => 'admin-'] , function(){

	Route::get('/images', function(){
		echo 'this is list images page';
	})->name('images');
	Route::get('/categories', function(){
		echo 'this is list category page';
	})->name('categories');
});

Route::get('/password-reset/{token}', function(){
	echo 'this reset password page';
})->name('pass-reset')->middleware('signed');

//show list user
Route::get('users', 'UserController@index')->name('user.list');

//show user
Route::get('/users/create', 'UserController@create');
Route::get('/users/{id}', 'UserController@show')->name('user.show');
//show form create user
//store user into DB
Route::post('/users' , 'UserController@store')->name('user.store');

//show edit user page
Route::get('/users/{id}/edit', 'UserController@edit')->name('user.edit');
//update user
Route::put('/users/{id}', 'UserController@update')->name('user.update');
// Route::resource('users', 'UserController');
//delete user 
Route::delete('/users/{id}', 'UserController@destroy')->name('user.delete');

// Route::resource('users', 'UserController');
Route::get('/test', function(){
	return view('test');
});


Route::get('/test-query-builder', 'ProductController@test');
Route::get('/test-eloquent', 'ProductController@index');



