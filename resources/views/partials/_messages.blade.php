<br>
@if(Session::has('success'))
  <div class="box box-success" role="alert">
    <i class="fa fa-thumbs-up" aria-hidden="true"></i> {{ Session::get('success') }}
  </div>
@endif

@if(count($errors) > 0)
  <div class="box box-error" role="alert">
    <strong><i class="fa fa-fa-times" aria-hidden="true"> Erreurs:</i></strong>
    <ul>
      @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
@endif
