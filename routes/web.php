<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Task;

Route::resources([
    'tasks' => 'TaskController'
]);
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', function() {
    $tasks = \App\Task::all();
    return view('welcome', ['tasks' => $tasks]);
});

Route::get('/submit', function(){
    return view('submit');
});

Route::post('/submit', function(Request $request) {
    $data = $request->validate([
        'name' => 'required|max:255',
        'description' => 'required|max:1000',
    ]);

    $task = tap(new App\Task($data))->save();
    return redirect('/');
});

Route::delete('/task/{id}', function($id) {
    Task::findOrFail($id)->delete();
    return redirect('/');
});