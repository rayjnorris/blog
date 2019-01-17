<?php

namespace App\Http\Controllers;

use App\Post;

class PagesController extends Controller{
    
    public function getIndex(){

		$posts = Post::orderBy('id', 'DESC')->get();
        
    	return view('pages.index', compact('posts'));
	

    }

    public function getBlog(){

        $posts = Post::orderBy('id', 'DESC')->where('post_active', '=', 1)->limit(10)->get();
        /*dd($posts);*/

        return view('pages.blog', compact('posts'));
    

    }

    public function getAbout(){

    	$posts = Post::orderBy('id', 'DESC')->get();
        
        return view('pages.about', compact('posts'));
    
    }

    public function getContact(){

    	return view('pages.contact');
    
    }
}

