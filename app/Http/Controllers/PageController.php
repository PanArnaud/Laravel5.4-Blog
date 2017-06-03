<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    function getIndex() {
      return view('pages.index');
    }
}
