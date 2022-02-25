<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\Patient;
use App\Models\Book;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class PatientController extends Controller
{
        /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        //
        $patient_id = Auth::id();

        $patient_details = Patient::find($patient_id);

        $appointment_details = DB::table('books')
        ->select('*')
        ->where('status','=', 'pending')
        ->join('doctors', 'doctors.id', '=', 'books.doctor_id')
        ->join('clinics', 'clinics.id', '=', 'books.clinic_id')
        ->get();
        $appointment_done = DB::table('books')
        ->select('*')
        ->where('status','!=', 'pending')
        ->join('doctors', 'doctors.id', '=', 'books.doctor_id')
        ->join('clinics', 'clinics.id', '=', 'books.clinic_id')
        ->get();
        

        return view('patients.dashboard')
        ->with('patient_details', $patient_details)
        ->with('appointment_details', $appointment_details)
        ->with('appointment_done', $appointment_done);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create(Request $request)
    {  

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(array $data)
    {
        //
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
        $patient_details = Patient::find($id);
        return view('patients.edit')
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
        //validation
        $this->validate($request,[
            'Fname' =>'required',
            'Sname' =>'required',
            'birth_date' =>'required',
            'gender' =>'required',
            'contact' =>'required',
            'email' =>'required'
        ]);

        //update user details
        $patient = Patient::find($id);
        $patient->Fname = $request->input('Fname');
        $patient->Sname = $request->input('Sname');
        $patient->birth_date = $request->input('birth_date');
        $patient->gender = $request->input('gender');
        $patient->contact = $request->input('contact');
        $patient->email = $request->input('email');
        $patient->save();

        return redirect('/patients')->with('success','Profile Updated'); 
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
