@extends('layouts.app')

@section('content')
<div class="form-area w-50 mx-auto">
  <h1>Edit Details</h1>
  {!! Form::open(['route' => ['patients.update',$patient_details->id], 'method'=>'POST']) !!}
  <div class="form-group">
      {{Form::label('Fname','First Name')}}
      {{Form::text('Fname', $patient_details->Fname,['class'=>'form-control','placeholder'=>'Fname'])}}
  </div>

  <div class="form-group">
      {{Form::label('Sname','Last Name')}}
      {{Form::text('Sname', $patient_details->Sname,['class'=>'form-control','placeholder'=>'Sname'])}}
  </div>

  <div class="form-group">
      {{Form::label('birthdate','D.O.B')}}
      {{Form::date('birth_date', $patient_details->birth_date,['class'=>'form-control','placeholder'=>'birth_date'])}}
  </div>

  <div class="form-group">
      {{Form::label('gender','Gender')}}
      {{Form::text('gender', $patient_details->gender,['class'=>'form-control','placeholder'=>'gender'])}}
  </div>

  <div class="form-group">
      {{Form::label('contact','Phone')}}
      {{Form::number('contact', $patient_details->contact,['class'=>'form-control','placeholder'=>'contact'])}}
  </div>

  <div class="form-group">
      {{Form::label('email','Email')}}
      {{Form::email('email', $patient_details->email,['class'=>'form-control','placeholder'=>'email'])}}
  </div>

  {{Form::hidden('_method','PUT')}}
  {{Form::submit('Submit',['class'=>'btn btn-primary mt-3'])}}
  {!! Form::close() !!}
@endsection