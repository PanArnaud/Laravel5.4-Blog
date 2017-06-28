@extends('main')

@section('title', 'Administration | Articles')

@section('content')
  <a href="{{ route('posts.create') }}" class ="button special icon fa-pencil">Nouvel article</a>
  <hr>
  <div class="table-wrapper">
    <table>
      <thead>
        <th width="5%">#</th>
        <th width="20%">Titre</th>
        <th width="45%">Contenu</th>
        <th width="10%">Crée le</th>
        <th width="20%"></th>
      </thead>
      <tbody>
        @foreach($posts as $post)
          <tr>
            <td>{{ $post->id }}</td>
            <td>
              @if(!$post->online)
                <i class="fa fa-circle red" aria-hidden="true"></i>
              @endif {{ $post->title }}</td>
            <td>{{ substr(strip_tags($post->body), 0, 100) }}{{ strlen(strip_tags($post->body)) > 100 ? "..." : "" }}</td>
            <td>{{ $post->getCreatedAtAttribute($post->created_at) }}</td>
            <td>
              <a href="{{ route('posts.show', $post->id) }}" class ="button special small icon fa-file-text">Voir</a> <a href="{{ route('posts.edit', $post->id) }}" class ="button special small icon fa-pencil">Modifier</a>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection
