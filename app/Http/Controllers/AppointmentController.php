<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AppointmentController extends Controller
{
    public function appointment(Request $request, $id){
        $tutor = User::find($id)->id;
        $student = Auth::id();

        Appointment::create(['tutor'=>$tutor, 'student'=>$student]);
        return view('success');


    }

    public function booked($id){
        $student = User::find($id)->id;
       $results = Appointment::where('student', $student)->get();

        return view('myBooking', ['results'=>$results]);


    }
}
