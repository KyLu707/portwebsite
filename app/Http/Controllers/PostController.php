<?php

namespace App\Http\Controllers;

use app\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function getPostList(){

        $posts = Post::all();
        return view('welcome', ['posts' => $posts]);
    }

    public function singlePost(Post $post){
        return view ('post.postSingle', ['post' => $post]);

    }

}


