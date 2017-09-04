@extends('layouts.main')

@section('content')

<div class="row mb-3">
    <div class="col-xl-3 col-sm-6">
        <div class="card bg-success text-white h-100">
            <div class="card-body bg-success">
                <div class="rotate">
                    <i class="fa fa-user fa-3x"></i>
                </div>
                <h6 class="text-uppercase">Assets</h6>
                <h1 class="display-4">{{ $total }}</h1>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-sm-6">
        <div class="card text-white bg-danger h-100">
            <div class="card-body bg-danger">
                <div class="rotate">
                    <i class="fa fa-list fa-3x"></i>
                </div>
                <h6 class="text-uppercase">Total Cost</h6>
                <h1 class="display-4">{{ $sum }}</h1>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-sm-6">
        <div class="card text-white bg-info h-100">
            <div class="card-body bg-info">
                <div class="rotate">
                    <i class="fa fa-twitter fa-3x"></i>
                </div>
                <h6 class="text-uppercase">Checked out</h6>
                <h1 class="display-4">125</h1>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-sm-6">
        <div class="card text-white bg-warning h-100">
            <div class="card-body bg-warning">
                <div class="rotate">
                    <i class="fa fa-share fa-3x"></i>
                </div>
                <h6 class="text-uppercase">Shares</h6>
                <h1 class="display-4">36</h1>
            </div>
        </div>
    </div>
</div>
@endsection