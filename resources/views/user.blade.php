@extends('layouts.app')

@section('title', 'Create New UserController')
@section('sidebar')
    <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand" href="https://shielded-fjord-53139.herokuapp.com/">Login</a>
    </nav>
@endsection
@section('content')
    <form class="p-2" method="post" action="https://shielded-fjord-53139.herokuapp.com/User/store">
        <div class="form-row">
            <div class="col-12 pt-2">
                <div class="alert alert-primary" role="alert">
                    Create new user
                </div>
            </div>
            @if (!empty($validate))
                <div class="col-12 pt-2">
                    <div class="alert alert-danger" role="alert">
                        @foreach ($validate as $valid)
                            <p>{{ $valid  }}!</p>
                        @endforeach
                    </div>
                </div>
            @endif
            <div class="form-group col-4 pt-2">
                <label for="name1">Name</label>
                @if(isset($dataForm['name']))
                    <input type="text" name="name" id="name1" value="{{$dataForm['name']}}" class="form-control" placeholder="Names" required>
                @else
                    <input type="text" name="name" id="name1" class="form-control" placeholder="Names" required>
                @endif
            </div>
            <div class="form-group col-4 pt-2">
                <label for="document1">Number Document</label>
                @if(isset($dataForm['document']))
                    <input type="number" max="9999999999" value="{{$dataForm['document']}}"  id="document1" name="document" class="form-control" placeholder="Number Document" required>
                @else
                    <input type="number" max="9999999999"  id="document1" name="document" class="form-control" placeholder="Number Document" required>
                @endif
            </div>
            <div class="form-group col-4 pt-2">
                <label for="email1">Email</label>
                @if(isset($dataForm['email']))
                    <input type="email" name="email" value="{{$dataForm['email']}}" id="email11" class="form-control" placeholder="Email" required>
                @else
                    <input type="email" name="email" id="email11" class="form-control" placeholder="Email" required>
                @endif
            </div>
            <div class="form-group col-4 pt-2">
                <label for="password2">Confirm Password</label>
                @if(isset($dataForm['password_confirm']))
                    <input type="password" name="password_confirm" value="{{$dataForm['password_confirm']}}" id="password2" class="form-control" placeholder="Confirm Password" required>
                @else
                    <input type="password" name="password_confirm" id="password2" class="form-control" placeholder="Confirm Password" required>
                @endif
            </div>
            <div class="form-group col-4 pt-2">
                <label for="password1">Password</label>
                @if(isset($dataForm['password']))
                    <input type="password" name="password" value="{{$dataForm['password']}}" id="password1" class="form-control" placeholder="Password" required>
                @else
                    <input type="password" name="password" id="password1" class="form-control" placeholder="Password" required>
                @endif
            </div>
            <div class="form-group col-4 pt-2">
                <label for="country1">Country</label>
                <select id="country1" name="country" class="form-control" required>
                    <option value="">Choose Country...</option>
                    @foreach ($country as $dataCountry)
                        @if(isset($dataForm['country']))
                            @if($dataForm['country']== $dataCountry['id_country'])
                                <option value="{{ $dataCountry['id_country'] }}" selected>{{ $dataCountry['name'] }}</option>
                            @else
                                <option value="{{ $dataCountry['id_country'] }}">{{ $dataCountry['name'] }}</option>
                            @endif
                        @else
                            <option value="{{ $dataCountry['id_country'] }}">{{ $dataCountry['name'] }}</option>
                        @endif
                    @endforeach
                </select>
            </div>
            <div class="col-12 pt-2">
                <input type="hidden" name="action" value="save_user">
                <button type="submit" class="btn btn-outline-success btn-block">Save</button>
            </div>
        </div>
    </form>
@endsection