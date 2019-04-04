<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function index(){
        $posts = Post::orderBy('id', 'DESC')->get();

        return view('index', compact('posts'));
    }

    public function store(Request $request){
       $tag = explode(',', $request->tag);

       $post = Post::create($request->all());
       $post->tag($tags);

       return back()->with('info', 'Post criado com sucesso');
    }
}
