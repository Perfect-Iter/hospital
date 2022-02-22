@extends('layouts.app')

@section('content')
    <div class="container">

       

        <div class="form-area w-50 mx-auto">
            <h1>Register Patient</h1>
            {!! Form::open(['route' => 'patients.create', 'method'=>'POST']) !!}
            <div class="form-group">
                {{Form::label('Fname','First Name')}}
                {{Form::text('Fname', '',['class'=>'form-control'])}}
            </div>
    
            <div class="form-group">
                {{Form::label('Sname','Last Name')}}
                {{Form::text('Sname', '',['class'=>'form-control'])}}
            </div>
    
            <div class="form-group">
                {{Form::label('birthdate','D.O.B')}}
                {{Form::date('birth_date', '',['class'=>'form-control'])}}
            </div>
    
            <div class="form-group">
                {{Form::label('gender','Gender')}}
                {{Form::text('gender', '',['class'=>'form-control'])}}
            </div>
    
            <div class="form-group">
                {{Form::label('contact','Phone')}}
                {{Form::number('contact', '',['class'=>'form-control'])}}
            </div>
    
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