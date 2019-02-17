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

// Example: putting singleton into service container
/* app()->singleton('\App\Services\Twitter', function() {
    return new \App\Services\Twitter('afgsdfghfsdh');
   });
   Request it from service container and assign it:
   $twitter = app('\App\Services\Twitter');
*/

Route::get('/', function () {
    return view('welcome');
});

/*  RESTful Convention
    GET /projects (index)
    GET /projects/create (create)
    GET /projects/1 (show)
    POST /projects (store)
    GET /projects/1/edit (edit)
    PATCH /projects/1 (update)
    DELETE /projects/1 (destroy)
*/

Route::resource('projects', 'ProjectsController');

Route::patch('/tasks/{task}', 'ProjectTasksController@update');

Route::post('/projects/{project}/tasks', 'ProjectTasksController@store');

// Route::get('/projects', 'ProjectsController@index');
// Route::get('/projects/create', 'ProjectsController@create');
// Route::get('/projects/{project}', 'ProjectsController@show');
// Route::post('/projects', 'ProjectsController@store');
// Route::get('/projects/{project}/edit', 'ProjectsController@edit');
// Route::patch('/projects/{project}', 'ProjectsController@update');
// Route::delete('/projects/{project}', 'ProjectsController@destroy');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
