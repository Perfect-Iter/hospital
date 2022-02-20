<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

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
