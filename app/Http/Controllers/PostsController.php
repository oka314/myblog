<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    public function index(){
        $posts = Post::all();
        dd($posts->toArray());
        return view('posts.index');
    }
}
