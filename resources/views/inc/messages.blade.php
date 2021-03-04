@if(count($errors) > 0)
    @foreach($errors->all() as $error)
        <div class="alert alert-danger">
            {{$error}}
        </div>
    @endforeach
@endif
@if(session('success'))
        <div class="alert alert-succes" style="background-color: rgba(0, 128, 0, 0.486)">
            {{session('success')}}
        </div>
@endif
@if(session('error'))
        <div class="alert alert-danger">
            {{session('error')}}
        </div>
@endif