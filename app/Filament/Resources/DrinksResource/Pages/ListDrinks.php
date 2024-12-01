<?php

namespace App\Filament\Resources\DrinksResource\Pages;

use App\Filament\Resources\DrinksResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDrinks extends ListRecords
{
    protected static string $resource = DrinksResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
