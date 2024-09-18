<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use App\Models\UserIdentificationAndVerificationInfo;
use App\Models\userMedicalInfo;
use App\Models\userPersonalInfo;
use Database\Factories\UserMedicalInfoFactory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class UserPersonalInfoController extends Controller
{
    public function create()
    {
        $doctors = Doctor::all();

        return view('profile.personalinfo', ['user' => Auth::user(), 'doctors' => $doctors]);
    }

    public function store(Request $request)
    {
        // dd($request);
        $validateCredentials = Validator::make($request->all(), [
            "full_name" => "required",
            "email" => "required",
            "phone_number" => "required",
            "date" => "required",
            "gender" => "required",
            "address" => "required",
            "occupation" => "required",
            "contact-name" => "required",
            "contact-number" => "required",
            "pysician" => "required",
            "insurance-policy" => "required",
            "insurance-provider" => "required",
            "allergies" => "required",
            "medications" => "required",
            "family_medical" => "required",
            "past_medical" => "required",
            "identification_type" => "required",
            "identification_Number" => "required"
        ]);

        if ($validateCredentials->fails()) {
            return redirect()->back()->withErrors($validateCredentials);
        }

       

        $credentials = $validateCredentials->getData();

        userPersonalInfo::create([
            'full_name' => $credentials['full_name'],
            'email_address' => $credentials['email'],
            'user_id' => Auth::id(),
            'phone_number' => $credentials['phone_number'],
            'date_of_birth' => $credentials['date'],
            'emergency_contact_name' => $credentials['contact-name'],
            'emergency_contact_number' => $credentials['contact-number'], 
            'address' => $credentials['address'],
            'occupation' => $credentials['occupation'],
            'gender' => $credentials['gender'],

        ]);

        userMedicalInfo::create([
            'user_id' => Auth::id(),
            'care_physician' => $credentials['pysician'],
            'Family_medical_history' => $credentials['family_medical'],
            'Current_medications' => $credentials['medications'],
            'Allergies' =>  $credentials['allergies'],
            'Insurance_policy_number' => $credentials['insurance-policy'],
            'Past_medical_history' => $credentials['past_medical'],
            'Insurance_provider' => $credentials['insurance-provider'],
        ]);

        UserIdentificationAndVerificationInfo::create([
            'Identification_type' => $credentials['identification_type'],
            'Identification_Number' => $credentials['identification_Number'],

            'health_condition_consent' => $credentials['health_condition'] === "on" ? 1 : 0,
            'health_consent' => $credentials['health_information']  === "on" ? 1 : 0,
            'policy_consent' => $credentials['privacy']  === "on" ? 1 : 0,
            'Scanned_Copy_of_Identification_Document' => $request->scan_copy ? $request->scan_copy->store('scanCopyCredentials') : "",
            'user_id' => Auth::id()

        ]);

        return redirect(route('appointment.book'));

    }
}
