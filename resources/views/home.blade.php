@extends('layouts.app')

@section('title', 'Create New UserController')
@section('sidebar')
    <nav class="navbar navbar-light bg-light">
        @if(isset($_SESSION['email']))
            <p>{{$_SESSION['email']}}</p>
        @endif
        <a class="navbar-brand" href="/zinobeBackEnd/Login/logout/">LogOut</a>
    </nav>
@endsection
@section('content')
    @if(isset($_SESSION['name_user']))
        <p class="pt-5"><b>Hello {{$_SESSION['name_user']}} wellcome to page!</b></p>
    @endif
    <form class="form-inline pt-3" method="POST" action="/zinobeBackEnd/User/search_user">
        <input class="form-control mr-sm-2" name="search" type="search" placeholder="Name User or Email" aria-label="Search">
        <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
    </form>
    @if(isset($result_filter))
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Document</th>
                <th scope="col">Country</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($result_filter as $key => $result)
                    <tr>
                        <th scope="row">{{$key+1}}</th>
                        <td>{{ $result['name']}}</td>
                        <td>{{ $result['email']}}</td>
                        <td>{{ $result['document']}}</td>
                        <td>{{ $result['country'][0]['name'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@endsection