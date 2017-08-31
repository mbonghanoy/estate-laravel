@extends('layouts.main')

@section('content')
<h2>Assets
<a href="/assets/create" class="btn btn-primary">
    Create
</a>
</h2>
<table class="table table-striped">
    <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Description</th>
            <th>Date Created</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
    @foreach($assets as $asset)
    <tr>
        <td>{{ $asset->id }}</td>
        <td><a href="{{ route('assets.show', $asset->id) }}">{{ $asset->name }}</a></td>
        <td>{{ $asset->description }}</td>
        <td>{{ $asset->created_at->diffForHumans() }}</td>
        <td>
            <a href="{{ route('assets.edit', $asset->id) }}">Edit</a>
        </td>
        <td>
            <a href="delete/{{ $asset->id }}">Delete</a>
        </td>
        </tr>
    @endforeach
    </tbody>
</table>
@endsection