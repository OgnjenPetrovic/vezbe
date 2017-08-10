<?php

namespace App\Http\Controllers;

use App\Post;

class PostsController extends Controller
{
    public function index()
    {
    	$posts=Post::all();
    	

    	return view('posts.index',['posts'=> $posts]);

    } //end

    public function show($id)
    {
    	$singlePost=Post::find($id);

    	return view('posts.single',['post' => $singlePost]);

    }//end

} // class
