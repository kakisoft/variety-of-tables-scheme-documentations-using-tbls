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

// Route::get('/', function () {
//     return view('welcome');
// });


//==========< Blog >==========
Route::get('/', 'PostsController@index');
// Route::get('/posts/{id}', 'PostsController@show');
Route::get('/posts/{post}', 'PostsController@show')->where('post', '[0-9]+');
Route::get('/posts/create', 'PostsController@create');
Route::post('/posts', 'PostsController@store');
Route::get('/posts/{post}/edit', 'PostsController@edit');
Route::patch('/posts/{post}', 'PostsController@update');
Route::delete('/posts/{post}', 'PostsController@destroy');
Route::post('/posts/{post}/comments', 'CommentsController@store');
Route::delete('/posts/{post}/comments/{comment}', 'CommentsController@destroy');

// sample
Route::get('/comments/transaction_sample_01', 'CommentsController@transaction_sample_01');
Route::get('/comments/transaction_sample_02', 'CommentsController@transaction_sample_02');


//==========< Auto Generated >==========
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//==========< Question >==========
Route::get('/question01', 'Question01Controller@index');
Route::get('/question01/winners', 'Question01Controller@winners');
Route::patch('/question01/challenge_users/save/', 'Question01Controller@reflectClearedUserInputData');
Route::get('/question01/challenge_users/save/', function () {
    return redirect('/question01/winners');
});
Route::get('/question01/challenge_users/token/{token}', 'Question01Controller@inputClearedUserInfomation');



//==========< sample >==========
Route::get('/sample01', 'WebSample01Controller@index');

