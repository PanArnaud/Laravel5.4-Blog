@extends('main')

@section('title', 'Administration | Créer un nouvel article')

@section('stylesheets')
  <link rel="stylesheet" href="{{ asset('css/parsley.css') }}">
@endsection

@section('content')
  <section>
    {!! Form::open(['route' => 'posts.store', 'data-parsley-validate' => '']) !!}
      <div class="row uniform">
        <div class="12u$">
          {{ Form::text('title', null, array('placeholder' => 'Titre', 'required' => '', 'maxlength' => '255')) }}
        </div>
        <div class="12u$">
          {{ Form::text('slug', null, array('placeholder' => 'Slug', 'minlength' => '5', 'maxlength' => '255')) }}
        </div>
        <div class="12u$">
          {{ Form::textarea('body', null, array('placeholder' => 'Contenu', 'required' => '')) }}
        </div>
        <div class="12u$">
        </div>
        <div class="12u$">

          <ul class="actions">
            <li>
              {{ Form::checkbox('online', 1, false, array('id' => "online")) }}
              {{ Form::label('online', 'En ligne ?') }}
            </li>
            <li>{{ Form::submit('Créer l\'article') }}</li>
          </ul>
        </div>
      </div>
    {!! Form::close() !!}
    <ul class="actions">
      <li>
        <a class="button small" href="{{ route('posts.index') }}"><i class="fa fa-angle-double-left"></i> Retour</a>
      </li>
    </ul>
  </section>
@endsection

@section('javascripts')
  <script type="text/javascript" src="{{ asset('js/parsley.min.js') }}"></script>
@endsection
