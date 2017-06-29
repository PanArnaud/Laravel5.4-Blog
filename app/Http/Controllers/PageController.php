<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PageController extends Controller
{
    function getIndex() {
      $posts = Post::orderBy('id', 'DESC')->limit(6)->get();
      return view('pages.index')->with('posts', $posts);
    }
}
