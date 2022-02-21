{{-- Message SUCCESS --}}
@if ($message = Session::get('success'))
      <div class="alert alert-success alert-block">
          <strong>{{$message}}</strong>
      </div>
@endif

{{-- Message WARNING --}}
@if ($message = Session::get('warning'))
      <div class="alert alert-warning alert-block">
          <strong>{{$message}}</strong>
      </div>
@endif


@if ($errors->any())
    <div  class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{  $error  }}</li>
            @endforeach
        </ul>
    </div>
@endif
