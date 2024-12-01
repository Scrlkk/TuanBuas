<?php

namespace App\Http\Controllers;

use App\Models\Food;
use Inertia\Inertia;

class FoodController extends Controller
{
    public function index()
    {
        $foods = Food::limit(4)->get();
        return Inertia::render('HomeViews', [
            'foods' => $foods,
        ]);
    }

    public function getMenu()
    {
        $foods = Food::all();
        return Inertia::render('MenuViews', [
            'foods' => $foods,
        ]);
    }

    public function getMenuData()
    {
        return Food::all();
    }
}
