<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PublicController extends Controller
{
    public function index() {
        $articles = Article::orderBy('created_at', 'desc')->take(4)->get();
        return view('home',compact('articles'));
    }
        
    public function indexarticles() {
        $articles = Article::all();
        return view('articles.indexarticles', compact('articles'));
    }
    
    public function articleDetails($id) 
    {
        $article = Article::findOrFail($id);
        return view("articles.details",["article"=>$article]);
    }

    public function articlesByCategory($name, $category_id){
        $category = Category::find($category_id);     
        $articles = $category->articles()                  
        ->orderBy('created_at', 'desc')         
        ->paginate(2);         
        return view('articles.category', compact('category', 'articles'));
    }

}
    