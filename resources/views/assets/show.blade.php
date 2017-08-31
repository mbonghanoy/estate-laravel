@extends('layouts.main')

@section('content')
<h2>Assets</h2>

<h1>{{ $asset->name }}</h1>
<p>{{ $asset->description }}</p>
@endsection