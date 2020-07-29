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
 use App\Services\Twitter;

// app()->singleton('App\Services\Twitter', function(){
//      return new \App\Services\Twitter('ansdivjhs');
// });



 Route::get('/', 'PagesController@home')->name('home');
 Route::get('/home', 'HomeController@index')->name('home');

// Route::get('/', function(Twitter $twitter){
//     dd($twitter);
//     //dd(app('foo'));
//     //dd(app('App\Example'));
//     //dd(app('example'), app('example'));
//  })->name('home');

Route::group(['middleware' => ['auth']], function(){
    Route::get('/about', 'PagesController@about')->name('about');
    Route::get('/contact', 'PagesController@contact')->name('contact');

    Route::resource('projects', 'ProjectsController');

    Route::post('/completed-task/{task}', 'ProjectTaskCompleteController@store');
    Route::delete('/completed-task/{task}', 'ProjectTaskCompleteController@destroy');
    Route::post('/task/create/{project}', 'ProjectTaskController@create');

    Route::get('/to-dos', function(){
        return view('todos');
    })->name('to-dos');
});
Auth::routes();




