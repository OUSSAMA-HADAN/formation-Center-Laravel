<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Applicant;

class AdminApplicantController extends Controller {
    // View all applicants
    public function index() {
        $applicants = Applicant::all();
        return view('admin.applicants.index', compact('applicants'));
    }

    // Show edit form
    public function edit($id) {
        $applicant = Applicant::findOrFail($id);
        return view('admin.applicants.edit', compact('applicant'));
    }

    // Update applicant
    public function update(Request $request, $id) {
        $applicant = Applicant::findOrFail($id);

        $request->validate([
            'email' => 'required|email|unique:applicants,email,' . $id,
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'birth_date' => 'required|date',
            'birth_place' => 'required|string|max:255',
            'id_card_number' => 'required|string|max:20|unique:applicants,id_card_number,' . $id,
            'phone_number' => 'required|string|max:20',
            'marital_status' => 'required|in:single,married,divorced,widowed',
            'years_of_experience' => 'required|integer|min:0',
            'education_level' => 'required|string|max:255',
            'training_experience' => 'nullable|string',
            'pre_school_type' => 'required|in:public,private,montessori,other'
        ]);

        $applicant->update($request->all());

        return redirect()->route('admin.applicants.index')->with('success', 'Applicant updated successfully!');
    }

    // Delete applicant
    public function destroy($id) {
        Applicant::findOrFail($id)->delete();
        return redirect()->route('admin.dashboard')->with('success', 'Applicant deleted successfully!');
    }
}
