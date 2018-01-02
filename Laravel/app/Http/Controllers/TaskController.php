<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;


class TaskController extends Controller
{
    public function index() 
    {

	   //$tasks = DB::table('tasks')->get();
		$tasks = Task::latest()->get();

		return view('about',compact('tasks'));

    }

    public function show(Task $task)
    {
        //$tasks = Task::find($id);

	    return view('show',compact('task'));
    }

    public function shown()
    {
        return view('create');
    }

    public function store()
    {
        $this->validate(request(),[
            'body'=>'required','title'=>'required'
            ]);
        //create a new post using the request data and 
        //$post = new Task;

       /* $post->title = request('title');
        $post->body = request('body');

        //store it to database
        $post->save();
        //redirect to home page*/
        Task::create([
            'body'=>request('body'),
            'title'=>request('title')
            ]);
        return redirect('/info');
    }
}
