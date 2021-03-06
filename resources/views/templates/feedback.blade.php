@if(session('success'))
  <div class="alert alert-success fade in">
    <buton type="button" class="close pull-right" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </buton>
    {!! session('success') !!}
  </div>
@endif

@if(session('error'))
  <div class="alert alert-danger fade in">
    <buton type="button" class="close pull-right" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </buton>
    {!! session('error') !!}
@endif

@if(count($errors) > 0)
  <div class="alert alert-danger fade in">
    <button type="button" class="close pull-right" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
    <p>Perhatian.</p>
    <ul>
      @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
@endif