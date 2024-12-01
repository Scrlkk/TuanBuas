<?php

namespace App\Filament\Resources\DrinksResource\Pages;

use App\Filament\Resources\DrinksResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDrinks extends EditRecord
{
    protected static string $resource = DrinksResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
    protected function getRedirectUrl(): string
    {
        return route('filament.admin.resources.drinks.index');
    }
}
