<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index() 
    {

	   //$tasks = DB::table('tasks')->get();
		$tasks = Task::all();

		return view('Information',compact('tasks'));

    }

    public function show(Task $task)
    {
        //$tasks = Task::find($id);

	    return view('show',compact('task'));
    }
}
