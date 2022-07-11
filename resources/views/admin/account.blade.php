@extends('admin/layout')
@section('content')

<main>
    <div class="container">
        <div class="row h-100">
            <div class="col-12 col-md-10 mx-auto my-auto">
                @if($errors->any())
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="mb-4">Dismissing</h5>
                        <div class="alert alert-warning alert-dismissible fade show rounded mb-0" role="alert">
                            <strong>Error!</strong> {{$errors->first()}}.
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        </div>
                    </div>
                </div>
                @endif
                <div class="card auth-card">
                    <div class="col-md-6 offset-lg-3">
                        <form action="{{url('saveAdminAccountDetails')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row" class="form-group">

                                <div class="col-md-12">
                                    <label>Name</label>
                                    <input class="form-control" type="text" name="name" id="name" value="{{Auth::User()->name}}">
                                </div>
                                <div class="col-md-12">
                                    <label>Email</label>
                                    <input class="form-control" type="email" name="email" id="email" value="{{Auth::User()->email}}">
                                </div>

                            </div>
                            <div class="row" class="form-group">

                                <div class="col-md-12">
                                    <label>Password</label>
                                    <input class="form-control" type="text" name="password" id="password">
                                </div>
                                <div class="col-md-12">
                                    <label>Profile Pic</label>
                                    <input class="form-control" type="file" name="image" accept="image/png, image/gif, image/jpeg" onchange="loadFile(event)" id="image">
                                    <div class="circular_image">
                                        <img id="output" src="{{asset('images')}}/{{Auth::User()->image}}" />
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-secondary mb-1">Submit</button>
                            </div>
                        </form>

                    </div>

                </div>
            </div>
        </div>

    </div>
</main>
<script>
    var loadFile = function(event) {
        var reader = new FileReader();
        reader.onload = function() {
            var output = document.getElementById('output');
            output.src = reader.result;
            jQuery('#output').addClass('circular_image_profile');
        };
        reader.readAsDataURL(event.target.files[0]);
    };
</script>
@endsection