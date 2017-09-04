@extends('layouts.main')

@section('content')
<h2>Employee
<a href="/employee/create" class="btn btn-primary">
    Add
</a>
</h2>
<table class="table table-striped">
    <thead>
        <tr>
            <th>Last Name</th>
            <th>First Name</th>
            <th>Middle Name</th>
            <th>Job Title</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
    @foreach($employees as $employee)
    <tr>
        <td>{{ $employee->last_name }}</td>
        <td>{{ $employee->first_name }}</td>
        <td>{{ $employee->middle_name }}</td>
        <td>{{ $employee->job_title }}</td>
        <td>
            <a href="{{ route('employee.edit', $employee->id) }}">Edit</a>
        </td>
    </tr>
    @endforeach
    </tbody>
</table>
@endsection