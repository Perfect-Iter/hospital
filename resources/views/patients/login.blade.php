@extends('layouts.app')

@section('content')
    <a href="/patients/registration">Register</a>
    <div class="container">

       

        <div class="form-area w-50 mx-auto">
            <h1>Login</h1>
            {!! Form::open(['route' => 'patients.login', 'method'=>'POST']) !!}

    
            <div class="form-group">
                {{Form::label('email','Email')}}
                {{Form::email('email', '',['class'=>'form-control'])}}
            </div>
    
            <div class="form-group">
                {{Form::label('password','Password')}}
                {{Form::text('password', '',['class'=>'form-control'])}}
            </div>
             
            {{Form::submit('Submit',['class'=>'btn btn-primary mt-3'])}}
            {!! Form::close() !!}
        </div>
    </div>
@endsection