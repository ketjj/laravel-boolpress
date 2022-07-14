<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//importare il model- Post
use App\Post;

class PageController extends Controller
{
    public function index(){
        // $posts = Post::all();
        $posts = Post::with('category')->with('tags')->get();
        //metodo with funziona solo con ->get() non con ->all();
        //perchè Post? --> l'unico Model che ha le relazoni con il Category e il Tag
        return response()->json($posts);
    }
}
