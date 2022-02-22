<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;


class Patient extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'patients';

    protected $fillable = [
        'Fname', 
        'Sname' ,
        'birth_date', 
        'gender', 
        'contact',
        'email' ,
        'password',
    ];

    protected $hidden = [
        'password',
    ];

    public function getAuthPassword()
    {
     return $this->password;
    }

}
