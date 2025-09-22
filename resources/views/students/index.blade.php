@extends('Master.layout')

@section('content')

<div class="container">

    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>All Students</h2>
        <a href="{{ route('students.create') }}" class="btn btn-primary">Add Student</a>
    </div>

    <div class="table-responsive">
        <table class="table table-striped table-bordered align-middle">
            <thead class="table-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Date of Birth</th>
                    <th scope="col">Class</th>
                    <th scope="col">Age</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($allStudents as $student)
                    <tr>
                        <td>{{ $student->id }}</td>
                        <td>{{ $student->name }}</td>
                        <td>{{ $student->email }}</td>
                        <td>{{ $student->date_of_birth }}</td>
                        <td>{{ $student->class }}</td>
                        <td>{{ $student->age }}</td>
                        <td>
                            <a href="{{ route('students.edit', $student->id) }}" class="btn btn-sm btn-warning">Edit</a>
                            <form action="{{ route('students.destroy', $student->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger"
                                    onclick="return confirm('Are you sure you want to delete this student?')">
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7" class="text-center">No students found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>


@endsection
