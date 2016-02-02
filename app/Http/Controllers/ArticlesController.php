<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Article;

use Illuminate\Http\Request;
use App\Http\Requests\ArticleRequest;

class ArticlesController extends Controller
{
    public function index() {
        $articles = Article::all();

        return view('articles.index', compact('articles'));
    }

    public function show($id){
        $article = Article::findOrFail($id);
        return view('articles.show', compact('article'));
    }

    public function create(){
        return view('articles.create');
    }

    //    public function store(ArticleRequest $request){
    public function store(ArticleRequest $request){
        Article::create($request->all());

        return redirect('articles');
    }
}
