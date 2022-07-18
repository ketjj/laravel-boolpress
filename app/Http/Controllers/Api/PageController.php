<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//importare il model- Post
use App\Category;
use App\Post;
use App\Tag;

class PageController extends Controller
{
    public function index(){
        // $posts = Post::all();
        $posts = Post::with('category')->with('tags')->paginate(5);
        //====> puoi unire più variabili nel compact ..... Post::with(compact(['category','tags']))->get()
        //metodo with funziona solo con ->get() non con ->all();
        //perchè Post? --> l'unico Model che ha le relazoni con il Category e il Tag

        $categories = Category::all();
        $tags = Tag::all();
        
        return response()->json(compact('posts','categories', 'tags'));
    }

    public function show($slug){
        $post = Post::where('slug', $slug)->with(['category', 'tags'])->first();

        return response()->json($post);
    }
}
