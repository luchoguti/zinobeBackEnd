@extends('layouts.app')

@section('title', 'Home')

@section('sidebar')
    <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand" href="./index.php/new_user">New User</a>
    </nav>
@endsection

@section('content')
    <form>
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection