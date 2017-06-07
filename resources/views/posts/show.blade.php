@extends('main')

@section('title', 'Administration | '.$post->title)

@section('content')
  <ul class="icons">
    <li>
      <strong><i href="#" class="icon fa-{{ $post->online == 1 ? 'check' : 'times' }}"></i></strong>
       {{ $post->online == 1 ? 'En ligne' : 'Hors ligne' }}
    </li>
    <li><strong>Création:</strong> <i> {{$post->getCreatedAtAttribute($post->created_at) }}</i></li>
    <li><strong>Modification:</strong> <i> {{$post->getUpdatedAtAttribute($post->created_at) }}</i></li>
    <li>
      {!! Html::linkRoute('posts.edit', 'Editer', array($post->id), array('class' => 'button special small icon fa-pencil')) !!}
    </li>
    <li>
      {!! Html::linkRoute('posts.destroy', 'Supprimer', array($post->id), array('class' => 'button small icon fa-trash')) !!}
    </li>
  </ul>

  <hr>

  <header class="main">
    <h1><h1>{{ $post->title }}</h1></h1>
  </header>

  <p>{{ $post->body }}</p>
@endsection
