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
<form method="POST" action="{{ route('assets.store') }}">
{{ csrf_field() }}
  <div class="form-group">
    <label for="name">Name</label>
    <input name="name" type="text" class="form-control" id="name" placeholder="Enter name" autocomplete="off">
  </div>
  <div class="form-group">
    <label for="name">Cost</label>
    <input name="cost" type="text" class="form-control" id="name" placeholder="Asset Cost" autocomplete="off">
  </div>
  <div class="form-group">
    <label for="description">Description</label>
    <textarea name="description" class="form-control" id="" cols="30" rows="10"></textarea>
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection