<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use App\Http\Requests\StoreArticleRequest;


class ArticlesController extends Controller
{
    public function create(){
        return view('articles.create');
    }

    public function store(StoreArticleRequest $request){

        $imageId = uniqid();

        $fileName = 'imahe-article' . $imageId . '.' . $request->file('image')->extension();

        $image = $request->file('image')->storeAs('public', $fileName);

        $article = new Article;
        $article->title = $request->title;
        $article->content = $request->content;
        $article->image = $fileName;
        $article->image_id = $imageId;

        $article->save();

        return redirect()->route('home.index');
    }
}
