<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public static function getAll()
    {
    	$posts=DB::table('posts')->get();
    }
}
