<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Applicant;

class ApplicantController extends Controller {
    public function create() {
        return view('apply');
    }
    public function store(Request $request) {
        $request->validate([
            'email' => 'required|email|unique:applicants,email',
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'birth_date' => 'required|date',
            'birth_place' => 'required|string|max:255',
            'id_card_number' => 'required|string|max:20|unique:applicants,id_card_number',
            'phone_number' => 'required|string|max:20',
            'marital_status' => 'required|in:single,married,divorced,widowed',
            'years_of_experience' => 'required|integer|min:0',
            'education_level' => 'required|string|max:255',
            
        ]);

        Applicant::create($request->all());

        return redirect()->back()->with('success', 'Application submitted successfully!');
    }
}
