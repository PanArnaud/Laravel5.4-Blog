@extends('main')

@section('title', 'Administration | Créer un nouvel article')

@section('stylesheets')
  <link rel="stylesheet" href="{{ asset('css/parsley.css') }}">
@endsection

@section('content')
  <section>
    {!! Form::open(['route' => 'posts.store']) !!}
      <div class="row uniform">
        <div class="12u$">
          {{ Form::text('title', null, array('placeholder' => 'Titre')) }}
        </div>
        <div class="12u$">
          {{ Form::textarea('body', null, array('placeholder' => 'Contenu')) }}
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
  </section>
@endsection

@section('javascripts')
  <script type="text/javascript" src="{{ asset('js/parsley.min.js') }}"></script>
@endsection
