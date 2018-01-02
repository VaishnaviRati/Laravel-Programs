<?php

use App\Task;

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

Route::get('/info','TaskController@index');

Route::get('/info/{task}','TaskController@show');

Route::get('/posts/show','TaskController@shown');

Route::post('/posts','TaskController@store');



