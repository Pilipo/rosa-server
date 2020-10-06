<?php

namespace App\Http\Controllers\Recipes;

use App\Recipe;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Socialite;
use App\User;
use Carbon\CarbonImmutable;
use Illuminate\Database\Eloquent\Builder;

class RecipeController extends Controller
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

    public function index(Recipe $recipe)
    {
        $time = CarbonImmutable::now()->startOfWeek();
        $recipes = $recipe->with('dates')->whereHas('dates', function (Builder $query) use ($time) {
            $query->whereBetween('meal_day', [$time, $time->add(7, 'day')]);
        })->get();

        return view('recipes/home', [
            'time' => $time,
            'recipes' => $recipes
            ]);
    }

    private function testCalendar() {
        $timeReturn = [];
        $mytime = CarbonImmutable::now();
        $timeReturn['today'] = $mytime->now('America/Chicago'); 
        $timeReturn['weekStart'] = $mytime->now('America/Chicago'); 
        $mytime->startOfWeek()->subDay();
        echo 'today is ' . $lt . '<br>';
        for($i = 0; $i < 7; $i++) {
            echo $mytime->addDay();
            echo " - " . $mytime->englishDayOfWeek;
            if ($mytime->isSameDay($lt)) {
                echo " !!!";
            }
            echo "<br>";
        }
        return $mytime;
    }
}
