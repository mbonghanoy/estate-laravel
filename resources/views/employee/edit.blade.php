@extends('layouts.main')

@section('content')
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
<h2>Assets</h2>
<form method="POST" action="{{ route('employee.update', $employee->id) }}">
{{ csrf_field() }}
{{ method_field('put') }}
  <div class="form-group">
    <label for="first_name">Last name</label>
    <input name="last_name" type="name" class="form-control" id="name" placeholder="Enter name" value="{{ $employee->last_name }}" autocomplete="off">

    <label for="first_name">First name</label>
    <input name="first_name" type="name" class="form-control" id="name" placeholder="Enter name" value="{{ $employee->first_name }}" autocomplete="off">

    <label for="middle_name">Middle name</label>
    <input name="middle_name" type="name" class="form-control" id="name" placeholder="Enter name" value="{{ $employee->middle_name }}" autocomplete="off">

    <label for="job_title">Job Title</label>
    <input name="job_title" type="name" class="form-control" id="name" placeholder="Enter name" value="{{ $employee->job_title }}" autocomplete="off">

  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection