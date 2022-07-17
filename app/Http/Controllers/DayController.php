<?php

namespace App\Http\Controllers;

use App\Models\Day;
use Illuminate\Http\Request;

class DayController extends Controller
{
    public function index()
    {
        return view('days.index', [
            'days' => Day::latest()
        ]);
    }
}
