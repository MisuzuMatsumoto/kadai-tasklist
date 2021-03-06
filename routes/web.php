<?php

//最初はログインページを表示させる
    Route::get('/', function () {
        return view('welcome');
    }); 

//
    Route::get('login', 'tasklistsController@index');
    Route::resource('tasklists', 'tasklistsController');


// ユーザ登録 ->nameは名前を付けているだけ、link_to_route等で利用
    Route::get('signup', 'Auth\RegisterController@showRegistrationForm')->name('signup.get');
    Route::post('signup', 'Auth\RegisterController@register')->name('signup.post');

// ログイン認証
    Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
    Route::post('login', 'Auth\LoginController@login')->name('login.post');
    Route::get('logout', 'Auth\LoginController@logout')->name('logout.get');
    
//ログイン認証
    Route::group(['middleware' => ['auth']], function () {
        Route::resource('users', 'UsersController', ['only' => ['index', 'show']]);
        Route::resource('tasklists', 'TasklistsController', ['only' => ['store', 'destroy']]);
    });