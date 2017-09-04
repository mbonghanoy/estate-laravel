@extends('layouts.main')

@section('content')
<h2>Assets
<a href="/assets/create" class="btn btn-primary">
    Checkout
</a>
</h2>
<table class="table table-striped">
    <tbody>
        <tr>
            <td>Asset Name</td>
            <td>{{ $asset->name }}</td>
        </tr>
        <tr>
            <td>Asset Desctiption</td>
            <td>{{ $asset->description }}</td>
        </tr>
        <tr>
            <td>Cost</td>
            <td>{{ $asset->cost }}</td>
        </tr>
    </tbody>
</table>
@endsection