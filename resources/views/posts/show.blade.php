@extends('main')

@section('title', 'Administration | '.$post->title)

@section('content')
  <header class="main">
    <h1><h1>{{ $post->title }}</h1></h1>
  </header>

  <p>{{ $post->body }}</p>
@endsection
