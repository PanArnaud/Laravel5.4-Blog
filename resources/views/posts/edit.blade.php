@extends('main')

@section('title', 'Administration | '.$post->title)

@section('content')
  <ul class="icons">
    <li>
      <strong><i href="#" class="icon fa-{{ $post->online == 1 ? 'check' : 'times' }}"></i></strong>
       {{ $post->online == 1 ? 'En ligne' : 'Hors ligne' }}
    </li>
    <li><strong>Création:</strong> <i> {{ $post->getCreatedAtAttribute($post->created_at) }}</i></li>
    <li><strong>Modification:</strong> <i> {{ $post->getUpdatedAtAttribute($post->created_at) }}</i></li>
    <li>
      <a class="button small" href="{{ route('posts.index') }}"><i class="fa fa-angle-double-left"></i> Retour</a>
    </li>
  </ul>

  <hr>

  <header class="main">
    {!! Form::model($post, ['route' => ['posts.update', $post->id], 'method' => 'PUT']) !!}
    <div class="row uniform">
      <div class="12u$">
        {{ Form::text('title', null, array('placeholder' => 'Titre', 'required' => '', 'maxlength' => '255')) }}
      </div>
      <div class="12u$">
        {{ Form::textarea('body', null, array('placeholder' => 'Contenu', 'required' => '')) }}
      </div>
      <div class="12u$">
      </div>
      <div class="12u$">

        <ul class="actions">
          <li>
            {{ Form::checkbox('online', 1, $post->online == 1 ? true : false, array('id' => "online")) }}
            {{ Form::label('online', 'En ligne ?') }}
          </li>
          <li>{{ Form::submit('Editer') }}</li>
        </ul>
      </div>
    </div>
    {!! Form::close() !!}
@endsection
