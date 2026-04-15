<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ArticleController;
use Laravel\Sanctum\Sanctum;

Route::get('/test', function () {
    return response()->json([
        'data' => 'API working with get method'
    ]);
});
Route::post('/test', function (Request $request) {
        return $request->all();

    // return response()->json([
    //     'data' => 'API working with post method'
    // ]);
});

Route::post('/randomUser', UserController::class.'@random');

Route::post('/register', UserController::class.'@register');
Route::post('/login', UserController::class.'@login');

Route::post('/createArticle', [ArticleController::class, 'createArticle'])->middleware('auth:sanctum'); //create article
Route::get('/getArticles', ArticleController::class.'@getArticles'); //get all articles
Route::get('/getArticle/{id}', ArticleController::class.'@getArticle'); //get article by id
Route::delete('/deleteArticle/{id}', ArticleController::class.'@deleteArticle'); //delete article by id
Route::put('/updateArticle/{id}', ArticleController::class.'@updateArticle'); //update article by id



