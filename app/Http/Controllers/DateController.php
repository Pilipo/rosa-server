<?php

namespace App\Http\Controllers;

use App\Date;
use Illuminate\Http\Request;

class DateController extends Controller
{
    public function index(Date $date)
    {
        return response()->json($date->with('recipes')->paginate()->toArray());
    }
}
