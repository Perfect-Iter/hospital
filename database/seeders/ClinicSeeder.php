<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Models\Clinic;

class ClinicSeeder extends Seeder
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
        Clinic::insert([
            [
                'name' => 'Bliss-Nairobi',
                'address' => '1234-00300',
                'town' => 'Dagoretti',
                'city' => 'Nairobi',
                'contact' => '111111',
                'mid' => 1,
                'created_at'=>$now,
                'updated_at'=>$now,
            ],
            [
                'name' => 'Bliss-machakos',
                'address' => '3241-00200',
                'town' => 'machakos',
                'city' => 'machakos',
                'contact' => '2222222',
                'mid' => 2,
                'created_at'=>$now,
                'updated_at'=>$now,
            ],
            [
                'name' => 'Bliss-machakos',
                'address' => '3761-00200',
                'town' => 'langata',
                'city' => 'Nairobi',
                'contact' => '666666',
                'mid' => 3,
                'created_at'=>$now,
                'updated_at'=>$now,
            ]
        ]);
    }
}
