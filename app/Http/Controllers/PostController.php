<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
        public function show ($id)
    {
        $posts = [
            1 => 'mon titre 1',
            2 => 'mon titre 2'
        ] ;

        $post = $posts[$id] ?? 'pas de titre';

        return view('article', ['post'=> $post ]);
    }

    public function contact() {
        return view('contact');
    }
    public function index(){
        $posts = [
            'mon super titre 1',
            'mon super titre 2'
        ] ;
        return view('articles', ['posts' => $posts]) ;
    }
}


