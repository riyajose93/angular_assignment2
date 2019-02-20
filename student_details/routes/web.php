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
Route::get('/hello', function () {
    return "<h1>hai frds<h1>";
});
Route::get('/users/{id}', function ($id) {
    return 'my id is ' .$id;
});
Route::get('/ab', function () {
    return view('forms.about');
});
Route::get('/con','FormsController@index');
Route::get('/sample','FormsController@sample');
Route::get('/con1','FormsController@about');
Route::get('/con2','FormsController@service');
Route::get('/con3','FormsController@home');
Route::get('/create', function () {
    return view('books.book');
});
Route::resource('/book','Bookscontroller');
//Route::get('/sample','BooksController@sample'); 
Route::get('/create', function () {
    return view('students.stud');
});
Route::resource('/ab','StdetailsController');

    