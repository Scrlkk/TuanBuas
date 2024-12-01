<?php

namespace App\Http\Controllers;

use App\Models\Drink;
use Inertia\Inertia;

class DrinkController extends Controller
{
    public function getMenu()
    {
        $drinks = Drink::all();
        return Inertia::render('MenuViews', [
            'drinks' => $drinks,
        ]);
    }

    public function getMenuData()
    {
        return Drink::all();
    }
}
