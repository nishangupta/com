@foreach (['info', 'success', 'danger'] as $msg)
  @if(Session::has($msg))
  <div class="alert alert-{{$msg}} alert-dismissible" role="alert">
    {{ Session::get($msg) }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  @endif
@endforeach