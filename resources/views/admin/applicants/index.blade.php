@extends('admin.layout')

@section('content')
<div class="max-w-5xl mx-auto bg-white p-6 rounded-lg shadow-lg">
    <h2 class="text-xl font-bold mb-4">Applicants List</h2>

    @if(session('success'))
        <div class="bg-green-500 text-white p-3 mb-4 rounded">
            {{ session('success') }}
        </div>
    @endif

    <table class="w-full border-collapse border border-gray-300">
        <thead>
            <tr class="bg-gray-200">
                <th class="border p-2">ID</th>
                <th class="border p-2">Name</th>
                <th class="border p-2">Email</th>
                <th class="border p-2">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($applicants as $applicant)
                <tr class="border">
                    <td class="border p-2">{{ $applicant->id }}</td>
                    <td class="border p-2">{{ $applicant->first_name }} {{ $applicant->last_name }}</td>
                    <td class="border p-2">{{ $applicant->email }}</td>
                    <td class="border p-2">
                        <a href="{{ route('admin.applicants.edit', $applicant->id) }}" class="bg-yellow-500 text-white px-3 py-1 rounded">Edit</a>
                        <form action="{{ route('admin.applicants.destroy', $applicant->id) }}" method="POST" class="inline">
                            @csrf
                            <button type="submit" class="bg-red-500 text-white px-3 py-1 rounded" onclick="return confirm('Are you sure?')">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
