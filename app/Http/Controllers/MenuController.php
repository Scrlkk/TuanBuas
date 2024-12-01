<?php

namespace App\Http\Controllers;

use App\Http\Controllers\FoodController;
use App\Http\Controllers\DrinkController;
use Inertia\Inertia;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
        $foods = (new FoodController)->getMenuData();
        $drinks = (new DrinkController)->getMenuData();

        return Inertia::render('MenuViews', [
            'foods' => $foods,
            'drinks' => $drinks,
        ]);
    }

}
