<?php

namespace App\Http\Controllers\Planner;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Socialite;
use App\User;
use Carbon\Carbon;

class CalendarController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $mytime = Carbon::now();
        $today = $mytime->now();
        $mytime->startOfWeek()->subDay();
        for($i = 0; $i < 7; $i++) {
            echo $mytime->addDay();
            echo " - " . $mytime->englishDayOfWeek;
            if ($mytime->isSameDay($today)) {
                echo " !!!";
            }
            echo "<br>";
        }
        // return view('planner/home', ['today' => $mytime]);
    }
}
