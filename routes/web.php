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


/*-------------Logout Form----------------*/
Route::get('/logout', 'Auth\LoginController@logout')
			->name('logout');
/*----------------------------------------*/


/*-------------Cart----------------*/
Route::get('/cart', 'CartController@index')
			->name('cart')
    ->middleware('auth.role:member, admin');
Route::get('/cart/insert/{id}', 'CartController@insert')->name('cart.insert')->middleware('auth.role:member');
Route::post('/cart/insert', 'CartController@save')->name('cart.insert.verify')->middleware('auth.role:member');
/*---------------------------------*/

/*-------------Transaction----------------*/
Route::get('/transactions', 'TransactionController@index')
    ->name('transactions')
    ->middleware('auth.role:member, admin');
Route::get('/transaction/insert', 'TransactionController@save')->name('transaction.insert')->middleware('auth.role:member');
/*---------------------------------*/


/*---------------Login Form----------------*/
Route::get('/login', 'Auth\LoginController@showLoginForm')
			->name('login');
/*-----------------------------------------*/
/*-------------Login Action----------------*/
Route::post('/login', 'Auth\LoginController@login')
			->name('login.verify');
/*-----------------------------------------*/


/*-------------Register Form------------------*/
Route::get('/register', 'Auth\RegisterController@showRegistrationForm')
			->name('register');
/*--------------------------------------------*/
/*-------------Register Action----------------*/
Route::post('/register', 'Auth\RegisterController@register')
			->name('register.verify');
/*--------------------------------------------*/


/*-------------Book Forms------------------*/
Route::get('/', 'BookController@index')
			->name('books.all');
Route::get('/books/insert', 'BookController@insert')
			->name('books.insert')
			->middleware('auth.role:admin');
Route::get('/books/edit/{id}', 'BookController@edit')
			->name('books.edit')
			->middleware('auth.role:admin');
Route::get('/books/{id}', 'BookController@show')
			->name('books.detail');
/*-----------------------------------------*/
/*-------------Book Actions----------------*/
Route::post('/books/insert', 'BookController@store')
			->name('books.insert.verify')
			->middleware('auth.role:admin');
Route::post('/books/edit', 'BookController@update')
			->name('books.edit.verify')
			->middleware('auth.role:admin');
Route::delete('/books/delete/{id}', 'BookController@delete')
			->name('books.delete.verify')
			->middleware('auth.role:admin');
/*-----------------------------------------*/


/*--------------Genre Forms-----------------*/
Route::get('/genres', 'GenreController@index')
			->name('genres.all')
			->middleware('auth.role:admin');
Route::get('/genres/insert', 'GenreController@insert')
			->name('genres.insert')
			->middleware('auth.role:admin');
Route::get('/genres/edit/{id}', 'GenreController@edit')
			->name('genres.edit')
			->middleware('auth.role:admin');
/*------------------------------------------*/
/*-------------Genre Actions----------------*/
Route::post('/genres/insert', 'GenreController@store')
			->name('genres.insert.verify')
			->middleware('auth.role:admin');
Route::post('/genres/edit', 'GenreController@update')
			->name('genres.edit.verify')
			->middleware('auth.role:admin');
Route::delete('/genres/delete/{id}', 'GenreController@delete')
			->name('genres.delete.verify')
			->middleware('auth.role:admin');
/*------------------------------------------*/


/*---------------Author Forms----------------*/
Route::get('/authors', 'AuthorController@index')
			->name('authors.all')
			->middleware('auth.role:admin');
Route::get('/authors/insert', 'AuthorController@insert')
			->name('authors.insert')
			->middleware('auth.role:admin');
Route::get('/authors/edit/{id}', 'AuthorController@edit')
			->name('authors.edit')
			->middleware('auth.role:admin');
/*-------------------------------------------*/
/*-------------Author Actions----------------*/
Route::post('/authors/insert', 'AuthorController@store')
			->name('authors.insert.verify')
			->middleware('auth.role:admin');
Route::post('/authors/edit', 'AuthorController@update')
			->name('authors.edit.verify')
			->middleware('auth.role:admin');
Route::delete('/authors/delete/{id}', 'AuthorController@delete')
			->name('authors.delete.verify')
			->middleware('auth.role:admin');
/*-------------------------------------------*/

