<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Post;
use Session;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $posts = Post::orderBy('id', 'DESC')->limit(100)->get();

        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, array(
            "post_title" => "required|max:50",
            "post_author" => "required|max:25", 
            "post_type" => "required",
            "post_date" => "required",
            "post_content" => "required|min:2"
            ));

        $post = new Post;

        $post->post_title = request('post_title');
        $post->post_author = request('post_author');
        $post->post_date = request('post_date');
        $post->post_active = request('post_active');
        $post->post_featured = request('post_featured');
        $post->post_type = request('post_type');
        $post->post_summary_image = request('post_summary_image');
        $post->post_summary = request('post_summary');
        $post->post_content_image = request('post_content_image');
        $post->post_content = request('post_content');

        $post->save();

        Session::flash('success', 'The post was saved successfully!');

        /*return redirect()->url('blog');*/
        return view('posts.show', compact('post'));


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    { 
        return view('posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $post = Post::find($id);

        /*dd($post);*/

        $this->validate($request, array(
            "post_title" => "required|max:50",
            "post_author" => "required|max:25", 
            "post_date" => "required",
            "post_type" => "required",
            "post_content" => "required|min:2",
            ));

        $post = Post::find($id);

        $post->post_title = request('post_title');
        $post->post_author = request('post_author');
        $post->post_date = request('post_date');
        $post->post_active = request('post_active');
        $post->post_type = request('post_type');
        $post->post_featured = request('post_featured');
        $post->post_summary_image = request('post_summary_image');
        $post->post_summary = request('post_summary');
        $post->post_content_image = request('post_content_image');
        $post->post_content = request('post_content');

        /*dd($post);*/

        $post->save();



        
        // set flash data with success message
        Session::flash('success', 'This post was successfully saved.');

        // redirect with flash data to posts.show
        return view('posts.edit', compact('post'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);

        $post->delete();

        // set flash data with success message
        Session::flash('success', 'The post was deleted.');

        $posts = Post::orderBy('id', 'DESC')->get();

        return view('posts.index', compact('posts'));
    }
}
