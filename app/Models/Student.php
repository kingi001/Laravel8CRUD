<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $table='students';
    protected $fillable=[
        'full_names',
        'registration_no',
        'email_address',
        'course',
        'mobile_number',
        'image',
    ];
}
