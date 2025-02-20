@extends('admin.layout')

@section('content')
<div class="max-w-3xl mx-auto bg-white p-6 rounded-lg shadow-lg">
    <h2 class="text-xl font-bold mb-4">Edit Applicant</h2>

    <form action="{{ route('admin.applicants.update', $applicant->id) }}" method="POST">
        @csrf
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
                <label class="block text-gray-700">Email</label>
                <input type="email" name="email" value="{{ $applicant->email }}" class="w-full p-2 border border-gray-300 rounded" required>
            </div>
            <div>
                <label class="block text-gray-700">First Name</label>
                <input type="text" name="first_name" value="{{ $applicant->first_name }}" class="w-full p-2 border border-gray-300 rounded" required>
            </div>
            <div>
                <label class="block text-gray-700">Last Name</label>
                <input type="text" name="last_name" value="{{ $applicant->last_name }}" class="w-full p-2 border border-gray-300 rounded" required>
            </div>
            <div>
                <label class="block text-gray-700">Phone Number</label>
                <input type="text" name="phone_number" value="{{ $applicant->phone_number }}" class="w-full p-2 border border-gray-300 rounded" required>
            </div>
        </div>

        <button type="submit" class="w-full bg-blue-600 text-white py-2 px-4 mt-4 rounded hover:bg-blue-700">
            Update
        </button>
    </form>
</div>
@endsection
