@extends('layouts.app')

@section('title', 'Home')

@section('sidebar')
    <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand" href="https://shielded-fjord-53139.herokuapp.com/User/create_user_view/">Create User</a>
    </nav>
@endsection

@section('content')
    @if(isset($message))
        <div class="col-12 pt-2">
            <div class="alert alert-warning" role="">
                <p>{{$message}}</p>
            </div>
        </div>
    @endif
    @if(isset($error))
        <div class="col-12 pt-2">
            <div class="alert alert-danger" role="">
                <p>{{$error}}</p>
            </div>
        </div>
    @endif
    <form class="pt-4" method="post" action="https://shielded-fjord-53139.herokuapp.com/Login/login">
        <div class="form-group ">
            <label for="exampleInputEmail1">Email address</label>
            @if(isset($dataForm['email_login']))
                <input type="email" value="{{$dataForm['email_login']}}" name="email_login" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            @else
                <input type="email" name="email_login" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            @endif
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" name="password_login" class="form-control" id="exampleInputPassword1">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection