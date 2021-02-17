<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    public function index()
    {   
        // $posts = Post::orderBy('created_at', 'desc')->get();
        $posts = Post::orderBy('created_at', 'desc')->paginate(7);
        // dd($posts);
        return view('posts.index',['posts' => $posts]);
    }

    public function show($post_id)
    {
        $post = Post::findOrFail($post_id);
        // dd($post);

        return view('posts.show', ['post'=>$post]);
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        // dd($request);
        $params = $request->validate([
            'title'=>'required|max:20',
            'body'=>'required|max:140'
        ]);
        
        // データを保存
        Post::create($params);

        // return view('posts.create');
        return redirect()->route('top');

    }

    public function edit($post_id)
    {
        $post = Post::findOrFail($post_id);
        return view('posts.edit', ['post'=>$post]);
    }

    public function update($post_id, Request $request)
    {
        // dd($request);
        $params = $request->validate([
            'title'=>'required|max:20',
            'body'=>'required|max:140'
        ]);
        // $post_idで該当の投稿を探す
        $post = Post::findOrFail($post_id);

        // データの書き換え＞セーブ
        $post->fill($params)->save();

        // return view('posts.create');
        return redirect()->route('posts.show',['post'=>$post]);

    }
}
