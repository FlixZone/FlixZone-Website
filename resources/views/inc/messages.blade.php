@if(count($errors) > 0)
    @foreach ($errors->all() as $error)
        <div class="alert alert-danger alert-dissmissible fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
            <strong>{{$error}}</strong>
        </div>
    @endforeach
@endif

@if(session('success'))
    <div class="alert alert-success alert-dissmissible fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
        <strong>Hey!</strong> {{session('success')}}
    </div>
@endif

@if(session('error'))
    <div class="alert alert-danger alert-dissmissible fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
        <strong>Hey!</strong> {{session('error')}}
    </div>
@endif