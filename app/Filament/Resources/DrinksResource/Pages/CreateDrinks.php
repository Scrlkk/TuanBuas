<?php

namespace App\Filament\Resources\DrinksResource\Pages;

use App\Filament\Resources\DrinksResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateDrinks extends CreateRecord
{
    protected static string $resource = DrinksResource::class;
    protected function getRedirectUrl(): string
    {
        return route('filament.admin.resources.drinks.index');
    }
}
