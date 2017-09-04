@extends('layouts.main')

@section('content')
<h2>Assets</h2>
<form method="POST" action="{{ route('assets.update', $asset->id) }}">
{{ csrf_field() }}
{{ method_field('put') }}
  <div class="form-group">
    <label for="name">Name</label>
    <input name="name" type="name" class="form-control" id="name" placeholder="Enter name" value="{{ $asset->name }}">
  </div>
  <div class="form-group">
    <label for="description">Description</label>
    <textarea name="description" class="form-control" id="" cols="30" rows="10">{{ $asset->description }}</textarea>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection