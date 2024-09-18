<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use Illuminate\Http\Request;

class AdminController extends Controller
{
  public function index()
  {
    $appointment = Appointment::with('user', 'doctor')->get();
        return view('admin.index',['appointments' => $appointment]);
  }
}
