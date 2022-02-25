<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Models\Doctor;



class DoctorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $now = Carbon::now()->toDateTimeString();
        Doctor::insert([
            [
                'Fname' => 'Random',
                'Sname' => 'Doctor',
                'birth_date' => '1990-01-22',
                'gender' => 'female',
                'contact' => '555555',
                'address' => '1231-00200 Nairobi',
                'experience' => 2,
                'specialization' => "EMT",
                'region' => "Nairobi",
                'created_at'=>$now,
                'updated_at'=>$now,
            ],
            [
                'Fname' => 'Another',
                'Sname' => 'Doctor',
                'birth_date' => '1989-01-22',
                'gender' => 'Male',
                'contact' => '444444',
                'address' => '1231-00500 Machakos',
                'experience' => 4,
                'specialization' => "Doctor",
                'region' => "Machakos",
                'created_at'=>$now,
                'updated_at'=>$now,
            ],
            [
                'Fname' => 'Spongebob',
                'Sname' => 'Doctor',
                'birth_date' => '1979-05-26',
                'gender' => 'female',
                'contact' => '333333',
                'address' => '1231-00200 Nairobi',
                'experience' => 7,
                'specialization' => "EMT",
                'region' => "Nairobi",
                'created_at'=>$now,
                'updated_at'=>$now,
            ]
        ]);
    }
}
