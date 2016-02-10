<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Post;

use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;

use Carbon\Carbon;

class PostsController extends Controller
{
    public function index() {
        $posts = Post::latest('published_at')
            ->published()
            ->get();
        return view('posts.index', compact('posts'));
    }

    public function show($id){
        $post = Post::findOrFail($id);
        return view('posts.show', compact('post'));
    }

    public function create(){
        return view('posts.create');
    }

    public function store(PostRequest $request){
        Post::create($request->all());
        \Flash::success('記事が投稿されました。');
        return redirect()->route('posts.index');
    }

    public function edit($id){
        $post = Post::findOrFail($id);
        return view('posts.edit', compact('post'));
    }

    public function update($id, PostRequest $request){
        $post = Post::findOrFail($id);
        $post->update($request->all());
        \Flash::success('記事を更新しました。');
        return redirect()->route('posts.show', [$post->id]);
    }

    public function destroy($id){
        $post = Post::findOrFail($id);
        $post->delete();
        \Flash::success('記事を削除しました。');
        return redirect()->route('posts.index');
    }
}
