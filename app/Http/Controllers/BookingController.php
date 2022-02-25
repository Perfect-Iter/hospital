<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Patient;
use App\Models\Doctor;
use App\Models\Clinic;
use Carbon\Carbon;
use DateTime;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $patient_id = Auth::id();

        $patient_details = Patient::find($patient_id);

        $doctors = Doctor::pluck('Fname');
        $clinics = Clinic::pluck('name');

        return view('appointments.create')
        ->with('patient_details', $patient_details)
        ->with('doctors', $doctors)
        ->with('clinics', $clinics);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function bookAppointment(Request $request)
    {  
        $request->validate([
            'clinic' => 'required',
            'doctor' => 'required', 
            'dov' => 'required|date|after:today',
            'book_time' => 'required',
        ]);
        $data = $request->all();
        $check = $this->store($data);
         
        return redirect("/patients")->withSuccess('Schedule Updated');
    }


    public function store(array $data)
    {
        $patient_id = Auth::id();

        $date = new DateTime($data['dov']);

        return Book::create([
            'patient_id' => $patient_id,
            'clinic_id' => $data['clinic'],
            'doctor_id' => $data['doctor'],
            'dov' => $date,
            'book_time' => $data['book_time'],
            'status' => "pending",
          ]);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $appointment_details = Book::find($id);
        return view('appointment.edit')
        ->with('patient_details', $patient_details);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
                //
                $affected = DB::table('books')
                ->where('id', $id)
                ->update(['status' => "cancelled"]);
        
                return view('patients.dashboard')
                ->with('affected', $affected);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
