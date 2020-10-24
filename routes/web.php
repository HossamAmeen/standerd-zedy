<?php



Route::prefix('admin')->group(function(){
    Auth::routes();

    Route::any('sendToken' , 'BackEnd\ConfigrationController@sendToken')->name('forget.password');
    Route::any('paswordreset/{id}/{token}' , 'BackEnd\ConfigrationController@paswordreset');
    // Route::post('login', 'BackEnd\UserController@login');
    Route::middleware('auth')->namespace('BackEnd')->group(function () {

        

        Route::get('/', 'ConfigrationController@index');
        Route::any('edit-account', 'UserController@editAccount')->name('edit-account');
        Route::resource('configrations', 'ConfigrationController');
        Route::resource('users', 'UserController');
        Route::resource('news', 'NewsController');
        Route::resource('articles', 'ArticleController');
        Route::resource('galleries', 'GalleryController');   
        Route::resource('questions', 'QuestionController');  
        Route::resource('videos', 'VideoController'); 
        
        Route::resource('clients', 'ClientController');
        Route::resource('employees', 'EmployeeController');
        Route::resource('services', 'ServiceController');     
    });
});

Route::get('home', 'HomeController@index')->name('home');
// Route::prefix('admin')->group(function () {
//     Auth::routes();
// });


Route::get('/', 'HomeController@home')->name('home');
Route::get('change/language/{lang}', 'HomeController@change_language');
Route::prefix('ar')->group(function(){
    Route::get('/', 'HomeController@home');
    Route::get('index', 'HomeController@index');
    Route::get('clients', 'HomeController@clients');
    Route::get('news', 'HomeController@news');
    Route::get('articles', 'HomeController@articles');
    Route::get('news/{id}', 'HomeController@show_news');
    Route::get('article/{id}', 'HomeController@show_artical');
    Route::get('questions', 'HomeController@questions');
    Route::any('booking', 'HomeController@booking');
    Route::any('help', 'HomeController@help');
    Route::get('about-us', 'HomeController@aboutUs');
});

Route::prefix('en')->group(function(){

    Route::get('index', 'HomeController@home')->name('en.index');
    Route::get('/', 'HomeController@home')->name('en.index');
    Route::get('clients', 'HomeController@clients');
    Route::get('news', 'HomeController@news');
    Route::get('news/{id}', 'HomeController@show_news');
    Route::get('articles', 'HomeController@articles');
    Route::get('article/{id}', 'HomeController@show_artical');
    Route::get('questions', 'HomeController@questions');
    Route::any('booking', 'HomeController@booking');
    Route::any('help', 'HomeController@help');
    Route::get('about-us', 'HomeController@aboutUs');
});