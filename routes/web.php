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
use Illuminate\Filesystem\Filesystem;

// app()->singleton('App\Example', function(){
//     die('reached key val first.');
//     return new App\Example;
// });

Route::get('/', function(){
    dd(app('App\Example'));

   dd(app('example'), app('example'));
   // 'PagesController@home';
});
Route::get('/about', 'PagesController@about');
Route::get('/contact', 'PagesController@contact');

Route::resource('projects', 'ProjectsController');
//Route::get('/projects', 'ProjectsController@index');
//Route::post('/projects', 'ProjectsController@store');
//Route::get('/projects/create', 'ProjectsController@create');

Route::post('/completed-task/{task}', 'ProjectTaskCompleteController@store');
Route::delete('/completed-task/{task}', 'ProjectTaskCompleteController@destroy');
//Route::post('/task/create/{project}', 'ProjectTaskController@create');
