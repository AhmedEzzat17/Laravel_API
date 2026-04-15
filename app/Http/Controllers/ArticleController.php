<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    public function createArticle(){
        $articles = Article::create([
            'title' => 'Random Article',
            'content' => 'Random Article Content',
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
