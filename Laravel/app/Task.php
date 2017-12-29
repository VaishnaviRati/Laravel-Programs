<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    public static function inComplete()
    {
    	return Task::where('completed','1')->get();
    }
}
