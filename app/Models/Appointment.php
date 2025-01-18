<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    //
    use HasFactory;

        protected $fillable = [
        'user_id',
        'service_id',
        'stylist_id',
        'date',
        'time',
        'name',
        'email',
        'phone_number',
    ];

}
