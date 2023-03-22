<?php

use Illuminate\Support\Facades\Route;

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

Route::get('tasks', function () {
    $tasks = ['Task #1', 'Task #2', 'Task #3'];
    return view('tasks', compact('tasks'));
});
