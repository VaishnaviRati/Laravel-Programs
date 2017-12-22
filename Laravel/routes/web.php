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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
   // return view('about',[ 'name'=> 'World']);
	//return view('about')->with('name','Vaishnavi');
	$name = 'World';
	//return view('about',['name'=>$name]);
	return view('about',compact('name'));
});

Route::get('/info', function () {

	$tasks = DB::table('tasks')->latest()->get();

	return view('Information',compact('tasks'));
});


Route::get('/info/task/{task}', function ($id) {


	$tasks = DB::table('tasks')->find($id);
	dd($tasks);

	return view('show',compact('tasks'));
});



