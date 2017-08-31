@extends('layouts.main')

@section('content')
<h2>Assets</h2>
<form method="POST" action="{{ route('assets.store') }}">
{{ csrf_field() }}
  <div class="form-group">
    <label for="name">Name</label>
    <input name="name" type="name" class="form-control" id="name" placeholder="Enter name" autocomplete="off">
    <small id="nameHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="description">Description</label>
    <textarea name="description" class="form-control" id="" cols="30" rows="10"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection