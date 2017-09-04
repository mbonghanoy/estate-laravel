<?php

namespace App\Http\Controllers;

use App\Asset;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function view()
    {
        $total = count(Asset::all());
        $sum = Asset::sum('cost');
        return view('reports', [
            'total' => $total,
            'sum' => $sum
            ]);
    }
}
