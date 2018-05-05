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

/*Главная страница*/
Route::get('/', function () {
    return view('index');
})->name('home');

/*Обо мне*/
Route::get('/about', function () {
    return view('about');
})->name('about');

/*Блог*/
Route::get('/blog', function () {
    return view('blog');
})->name('blog');

/*Статья*/
Route::get('/blog/article', function () {
    return view('article');
})->name('article');



//Админка
//Auth::routes();

//Переопределяем стандартные роуты!!!!!!!!!!! переделать стандартные маршруты


Route::group(['middleware' => ['web']], function() {
	// Login Routes
	Route::get('login', ['as' => 'login', 'uses' => 'Auth\LoginController@showLoginForm']);
    Route::post('login', ['as' => 'login.post', 'uses' => 'Auth\LoginController@login']);
    Route::post('logout', ['as' => 'logout', 'uses' => 'Auth\LoginController@logout']);
});



Route::get('/admin', 'AdminController@index')->name('admin');
