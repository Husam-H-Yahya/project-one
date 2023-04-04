<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('about', function () {
    $name = 'Husam';
   // return view('about', ['name' => 'Husam']);
   // return view('about')->with(['name', $name]);
    return view('about',compact('name'));
});

Route::post('about', function () {
    $name = 'Husam';
    if(isset($_POST['name']))
    $name = $_POST['name'];
    return view('about',compact('name'));
});

//Route::get('tasks', function () {
//    $tasks = ['Task #1', 'Task #2', 'Task #3'];
//    return view('tasks', compact('tasks'));
//});
Route::get('/tasks/{id}', [TaskController::class,'show']);
// Route::get('tasks', 'TaskController@index');
Route::get('app',function(){
    return view(('layout.app'));
});


Route::get('tasks',function(){
    return view(('tasks'));
});
