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
<form method="POST" action="{{ route('employee.store') }}">
{{ csrf_field() }}
  <div class="form-group">
    <label for="first_name">Last name</label>
    <input name="last_name" type="name" class="form-control" id="name" placeholder="Enter name" autocomplete="off">

    <label for="first_name">First name</label>
    <input name="first_name" type="name" class="form-control" id="name" placeholder="Enter name" autocomplete="off">

    <label for="middle_name">Middle name</label>
    <input name="middle_name" type="name" class="form-control" id="name" placeholder="Enter name" autocomplete="off">

    <label for="job_title">Job Title</label>
    <input name="job_title" type="name" class="form-control" id="name" placeholder="Enter name" autocomplete="off">

  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection