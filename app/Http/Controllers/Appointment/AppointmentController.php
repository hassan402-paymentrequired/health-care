<?php

namespace App\Http\Controllers\Appointment;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use App\Models\Doctor;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AppointmentController extends Controller
{
    public function  index()
    {
        $appointment = Appointment::where('user_id', Auth::id())->with('doctor', 'user')->get();
        // $appointment = Appointment::where('user_id', Auth::id())->with('doctor');
        // $appointment = User::with('appointments')->get();

        // dd($appointment);

        return view('profile.dashboard', ['appointments' => $appointment]);
    }
    public function  create()
    {
        return view('appointment.create', ['doctors' => Doctor::all()]);
    }

    public function  store(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'doctor' => 'required',
            'comment' => 'required',
            'reason' => 'required',
            'date' => 'required'
        ]);

        if ($validate->fails()) {
            return redirect()->back()->withErrors($validate);
        }

        $credentials = $validate->getData();
        $doctor = Doctor::where('name', '=', $credentials['doctor'])->firstOrFail();


        $appoinment = Appointment::create([
            'user_id' => Auth::id(),
            'doctor_id' => $doctor['id'],
            'appointment_date' => $credentials['date'],
            'appointment_reason' => $credentials['reason'],
            'appointment_comment' => $credentials['comment'],
        ]);

        // dd($appoinment->appointment_date);

        return redirect(route('appointment.success', ['appointment' => $appoinment->appointment_date, 'doctor' =>  $credentials['doctor']]));
    }

    public function success()
    {
        return view('appointment.success');
    }


    public function destroy(Request $request): Redirector|RedirectResponse
    {
        try {
            Auth::logout();
 
            $request->session()->invalidate();
         
            $request->session()->regenerateToken();
         
            return redirect('/');
            
        } catch (\Exception $e) {
            dd($e->getMessage());
        }

    }
}
