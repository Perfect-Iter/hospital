<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $fillable = [
        'patient_id', 
        'clinic_id' ,
        'doctor_id', 
        'dov', 
        'book_time',
        'status' ,
    ];
    public function doctor()
    {
        return $this->hasOne(Doctor::class);
    }

    public function clinic()
    {
        return $this->hasOne(Clinic::class);
    }
    public function patient()
    {
        return $this->hasOne(User::class);
    }
}
