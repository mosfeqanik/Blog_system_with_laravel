@extends('layouts.master')

@section('title','registration')
@push('css')

@endpush
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                <div class="card card-signin my-5">
                    <div class="card-body">
                        <h1 class="card-title text-center">REGISTER</h1>

                        <form action="" method="post" class="form-signin">
                            @include('errors.error')
                            {{ csrf_field() }}
                            <div class="form-label-group">
                                <input class="form-control" type="text" name="username"placeholder="Username" required autofocus>
                            </div><br>
                            <div class="form-label-group">
                                <input class="form-control" type="email" name="email" placeholder="email" required >
                            </div><br>
                            <div class="form-label-group">
                                <input class="form-control" type="password" name="password" placeholder="password" required >
                            </div><br>
                            <div class="form-label-group">
                                <input class="form-control" type="password" name="password_confirmation" placeholder="Confirmpassword" required >
                            </div><br>
                            <input class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" value="submit" >
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('js')

@endpush