<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index(){
        return view('posts', [
            "title" => "Posts",
            "posts" => Post::all()
        ]);
    }

    public function display(Post $post){
        return view('post', [
            "title" => "Sigle Post",
            "post" => $post
        ]);

    }
}
