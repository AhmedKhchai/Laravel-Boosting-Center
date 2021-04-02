<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use  App\Models\Post;

class PostsController extends Controller
{
public function show($slug){


    
    //  $post = \DB::table('posts')->where('slug', $slug)->first();

    //  dd($post);


     return view('posts', [
         'post' => Post::where('slug', $slug)->firstOrFail()

     ]);





    }
    
}
