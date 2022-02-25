@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="form-area w-50 mx-auto">
            <h1>Make Appointment</h1>

            {!! Form::open(['route' => 'appointent.bookAppointment', 'method'=>'POST']) !!}

    
            <div class="form-group mt-3 mb-3">
                {{Form::label('clinic','Clinic')}}
                {!! Form::select('clinic', $clinics,  ['class' => 'form-select','placeholder' => 'Bliss-Nairobi']) !!}
               
            </div>
    
            <div class="form-group mt-3 mb-3">
                {{Form::label('doctor','Doctor')}}
                {!! Form::select('doctor', $doctors,  ['class' => 'form-select','placeholder' => 'Another']) !!}
            </div>

            <div class="form-group">
                {{Form::label('appointment_date','Date')}}
                {{Form::date('dov', '',['class'=>'form-control'])}}
            </div>

            <div class="form-group">
                {{Form::label('book_time','Time')}}
                {{Form::time('book_time', '',['class'=>'form-control'])}}
            </div>
     
            {{Form::submit('Submit',['class'=>'btn btn-primary mt-3'])}}
            {!! Form::close() !!}
        </div>
    </div>
@endsection