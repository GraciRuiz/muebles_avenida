<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use App\Models\ArticleImage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\View;
use App\Http\Requests\ArticleRequest;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{   
    
    public function __construct()
    {
        $this->middleware('auth');
        $categories = Category::all();
        View::share('categories', $categories);
    }

    public function newAd() 
    {
        $uniqueSecret = base_convert(sha1(uniqid(mt_rand())), 16, 36);
        return view('articles.createarticles', compact('uniqueSecret')); 
    }
    
    public function uploadImages(Request $request)
    {
        
     $uniqueSecret = $request->header('uniqueSecret');
     $fileName = $request->file('file')->store("public/temp/{$uniqueSecret}");
     session()->push("images.{$uniqueSecret}", $fileName);
     return response()->json(
         session()->get("images.{$uniqueSecret}")
         
     );
    }
    
    public function storearticles(ArticleRequest $request) {
        //Mass Assignment
        //Article::create($request->all());
        //Creamos variable para acceder a traves de la $request a la imagen para que la guarde.
 
        //Mass Assignment asociado al usuario
        $article = Auth::user()->articles()->create($request->all());
        //Attach para la relacion articles con tags.
        $article->tags()->attach($request->tags);
        $uniqueSecret = $request->input('uniqueSecret');
        $images = session()->get("images.{$uniqueSecret}");
      
        foreach($images as $image){
            $i = new ArticleImage;
            $fileName = basename($image);
            $newFilePath = "public/articles/{$article->id}/{$fileName}";
            Storage::move($image,$newFilePath);
            $i->file = $newFilePath;
            $i->article_id = $article->id;
            $i->save();
        }
        File::deleteDirectory(storage_path("/app/public/temp/{$uniqueSecret}"));
        return redirect()->route('home')->withMessage('Tu articulo ha sido subido con exito.');
    }


    
}
