@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="container">
            <div class="main-body">
                  <div class="row gutters-sm">
                    <div class="col-md-4 mb-3">
                      <div class="card">
                        <div class="card-body">
                          <div class="d-flex flex-column align-items-center text-center">
                            <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
                            <div class="mt-3">
                              <h4>{!! $patient_details->Fname !!} {!! $patient_details->Sname !!}</h4>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-8">
                      <div class="card mb-3">
                        <div class="card-body">
                          <div class="row">
                            <div class="col-sm-3">
                              <h6 class="mb-0">Full Name</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                              {!! $patient_details->Fname !!} {!! $patient_details->Sname !!}
                            </div>
                          </div>
                          <hr>
                          <div class="row">
                            <div class="col-sm-3">
                              <h6 class="mb-0">Email</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                              {!! $patient_details->email !!}
                            </div>
                          </div>
                          <hr>
                          <div class="row">
                            <div class="col-sm-3">
                              <h6 class="mb-0">Phone</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                              {!! $patient_details->contact !!}
                            </div>
                          </div>
                          <hr>
                          <div class="row">
                            <div class="col-sm-3">
                              <h6 class="mb-0">Gender</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                              {!! $patient_details->gender !!}
                            </div>
                          </div>

                          <hr>
                          <div class="row">
                            <div class="col-sm-12">
                              <a class="btn btn-info " href="/patients/{{$patient_details->id}}/edit">Edit</a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-12 mb-3">
                        <div class="card h-100">
                          <div class="card-body">
                              <h1>Upcoming Appointment</h1>
                              <table class="table table-sm">
                                  <thead>
                                    <tr>
                                      <th scope="col"></th>
                                      <th scope="col">Date</th>
                                      <th scope="col">Doctor</th>
                                      <th scope="col">Clinic</th>
                                      <th scope="col">Status</th>
                                      <th scope="col"></th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    
                                      @if (count($appointment_details) > 0)
                                      @foreach ($appointment_details as $row)
                                      <tr>
                                        <td>{{$row->id}}</td>
                                        <td>{{$row->dov}}</td>
                                        <td>{{$row->Fname}} {{$row->Sname}}</td>
                                        <td>{{$row->name}}</td>
                                        <td>{{$row->status}}</td>

                                      </tr>
                                      @endforeach
                                      @else
                                      <p>No Apointments Found</p>
                                      @endif

                                  </tbody>
                                </table>
                                <a href="{{ route('appointment') }}" class="btn btn-primary">Make Appointment</a>
                          </div>
                        </div>
                      </div>


                        <div class="col-sm-12 mb-3">
                          <div class="card h-100">
                            <div class="card-body">
                                <h1>Treatment History</h1>
                                <table class="table table-sm">
                                    <thead>
                                      <tr>
                                        <th scope="col">Date</th>
                                        <th scope="col">Doctor</th>
                                        <th scope="col">Clinic</th>
                                        <th scope="col">Status</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      @if (count($appointment_done) > 0)
                                      @foreach ($appointment_done as $row)
                                        <tr>
                                          <td>{{$row->dov}}</td>
                                          <td>{{$row->Fname}} {{$row->Sname}}</td>
                                          <td>{{$row->name}}</td>
                                          <td>{{$row->status}}</td>
                                        </tr>
                                      @endforeach
                                      @else
                                      <p>No Apointments Found</p>
                                      @endif
                                    </tbody>
                                  </table>
                            </div>
                          </div>
                        </div>
                      </div>
    </div>
@endsection