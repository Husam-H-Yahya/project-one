<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;


class TaskController extends Controller
{
   public function index()
    {
        $tasks = DB::table('tasks')->where('name','like','task%')-> get();
        return view('tasks', compact('tasks'));
    }

    public function show($id)
    {

        $name = DB::table('tasks')->find($id);

        return view('name',compact('name'));
    }
}
