<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Manager;
class ManagerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Manager::insert([
            [
                'Fname' => 'Random',
                'Sname' => 'Manager',
                'birth_date' => '1995-03-22',
                'gender' => 'female',
                'contact' => '444444',
                'address' => '1231-00200 Nairobi',
                'region' => "Nairobi",
            ],
            [
                'Fname' => 'Another',
                'Sname' => 'Manager',
                'birth_date' => '1989-01-22',
                'gender' => 'Male',
                'contact' => '2222222',
                'address' => '1231-00500 Machakos',
                'region' => "Machakos",
            ],
            [
                'Fname' => 'Patrick',
                'Sname' => 'Manager',
                'birth_date' => '1979-05-16',
                'gender' => 'male',
                'contact' => '999999',
                'address' => '1231-00200 Nairobi',
                'region' => "Nairobi",
            ]
        ]);
    }
}
