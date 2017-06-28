<?php

namespace App\Http\Controllers;

use Session;
use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderBy('id', 'DESC')->paginate(10);
        return view('posts.index')->with('posts', $posts);
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
            'title'         =>'required|max:255',
            // 'slug'          => 'required|alpha_dash|min:5|max:255|unique:posts,slug',
            // 'category_id'   => 'required|integer',
            'body'          => 'required',
            // 'featured_image'=> 'sometimes|image'
        ));

        $post = new Post;
        $post->title = $request->title;
        // $post->slug = $request->slug;
        // $post->category_id = $request->category_id;
        $post->body = $request->body;
        $post->online = isset($request->online) ? isset($request->online) : 0;
        $post->save();

        Session::flash('success', 'L\'article à bien était enregistré !');
        return redirect()->route('posts.show', $post->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        return view('posts.show')->with('post', $post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        return view('posts.edit')->with('post', $post);
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
        $this->validate($request, array(
            'title'         =>'required|max:255',
            // 'slug'          => 'required|alpha_dash|min:5|max:255|unique:posts,slug',
            // 'category_id'   => 'required|integer',
            'body'          => 'required',
            // 'featured_image'=> 'sometimes|image'
        ));

        $post = Post::find($id);
        $post->title = $request->input('title');
        // $post->slug = $request->input('slug');
        // $post->category_id = $request->category_id;
        $post->body = $request->input('body');
        $post->online = null != $request->input('online') ? 1 : 0;
        $post->save();

        Session::flash('success', 'L\'article a bien été enregistré !');
        return redirect()->route('posts.show', $post->id);
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

        Session::flash('success', 'L\'article a bien été supprimé !');
        return redirect()->route('posts.index');
    }
}
