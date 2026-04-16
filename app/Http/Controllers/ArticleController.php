<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    public function createArticle(Request $request){
        $articles = Article::create([
            'title' => $request->input('title'),
            'content' => $request->input('content'),
        ]);
        return $articles;
    }

    public function getArticles(){
        $articles = Article::all();
        return $articles;
    }


    public function getArticle($id){
        $article = Article::find($id);
        return $article;
    }

    public function deleteArticle($id){
        $article = Article::find($id);
        $article->delete();
        return $article;
    }

    public function updateArticle($id, Request $request){
        $article = Article::find($id);
        $article->title = $request->input('title');
        $article->content = $request->input('content');
        $article->update();
        return $article;
    }
}
