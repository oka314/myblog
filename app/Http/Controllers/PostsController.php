<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    public function index(){
        $posts = Post::latest()->get();
        // $posts = [];
        // dd($posts->toArray());
        // return view('posts.index',['posts'=>$posts]);
        return view('posts.index')->with('posts',$posts);

    }
}
