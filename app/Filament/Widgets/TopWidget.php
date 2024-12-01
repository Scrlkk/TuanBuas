<?php

namespace App\Filament\Widgets;

use App\Models\Drink;
use App\Models\Food;
use Filament\Support\Enums\IconPosition;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class TopWidget extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Foods', Food::count())
                ->label('Foods')
                ->description('Total Foods in Menu')
                ->descriptionicon('heroicon-o-square-3-stack-3d', IconPosition::Before)
                ->chart([1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15])
                ->color('success'),
            Stat::make('Drinks', Drink::count())
                ->label('Drinks')
                ->description('Total Drinks in Menu')
                ->descriptionicon('heroicon-o-square-3-stack-3d', IconPosition::Before)
                ->chart([1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15])
                ->color('success'),
        ];
    }
}
