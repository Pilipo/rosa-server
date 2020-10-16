<?php

namespace App\Http\Controllers\WEB\Recipes;

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
        $recipes = $recipe->get();

        return view('recipes/home', [
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
