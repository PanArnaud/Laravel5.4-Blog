@extends('main')

@section('title', 'Administration | '.$post->title)

@section('content')
  <ul class="icons">
    <li>
      <strong><i href="#" class="icon fa-{{ $post->online == 1 ? 'check' : 'times' }}"></i></strong>
       {{ $post->online == 1 ? 'En ligne' : 'Hors ligne' }}
    </li>
    <li><strong>Création:</strong> <i>{{ $post->created_at }}</i></li>
    <li><strong>Modification:</strong> <i>{{ $post->updated_at }}</i></li>
    <li><a href="#" class="button special icon fa-search">Icon</a></li>
    <li><a href="#" class="button icon fa-download">Icon</a></li>
  </ul>

  <hr>

  <header class="main">
    <h1><h1>{{ $post->title }}</h1></h1>
  </header>

  <p>{{ $post->body }}</p>
@endsection
