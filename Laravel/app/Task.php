<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
	protected $fillable = ['body','title'];

    public static function inComplete()
    {
    	return Task::where('completed','1')->get();
    }

    public function comments()
    {
    	return $this->hasMany(Comment::class);
    }
}
