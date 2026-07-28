<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    // GET
    public function index()
    {
        return Appointment::all();
    }

    // POST
    public function store(Request $request)
    {
        $appointment = Appointment::create([
            'visitor_id' => $request->visitor_id,
            'host_name' => $request->host_name,
            'appointment_date' => $request->appointment_date,
            'appointment_time' => $request->appointment_time,
            'status' => $request->status
        ]);

        return response()->json($appointment);
    }

    // PUT
    public function update(Request $request, $id)
    {
        $appointment = Appointment::findOrFail($id);

        $appointment->update([
            'visitor_id' => $request->visitor_id,
            'host_name' => $request->host_name,
            'appointment_date' => $request->appointment_date,
            'appointment_time' => $request->appointment_time,
            'status' => $request->status
        ]);

        return response()->json($appointment);
    }
}