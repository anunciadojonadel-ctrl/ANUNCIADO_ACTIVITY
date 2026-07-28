<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $fillable = [
        'visitor_id',
        'host_name',
        'appointment_date',
        'appointment_time',
        'status'
    ];
}
