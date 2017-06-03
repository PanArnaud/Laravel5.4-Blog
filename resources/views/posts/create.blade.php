@extends('main')

@section('title', 'Administration | Créer un nouvel article')

@section('content')
  <section>
    {!! Form::open(['url' => 'posts.store']) !!}
      <div class="row uniform">
        <div class="12u$">
          {{ Form::text('title', null, array('placeholder' => 'Titre')) }}
        </div>
        <div class="12u$">
          {{ Form::textarea('body', null, array('placeholder' => 'Contenu')) }}
        </div>
        <div class="12u$">
          <ul class="actions">
            {{ Form::submit('Créer l\'article') }}
          </ul>
        </div>
      </div>
    {!! Form::close() !!}
  </section>
@endsection
