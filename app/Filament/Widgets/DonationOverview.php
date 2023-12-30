<?php

namespace App\Filament\Widgets;

use App\Models\Article;
use App\Models\Donation;
use App\Models\User;
use Filament\Widgets\ChartWidget;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class DonationOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [

            Stat::make('مجموع المستخدمين ', User::whereIn('role', ['donor', 'charity'])->count())->description('14% زيادة')
                ->descriptionIcon('heroicon-m-arrow-trending-up')
                ->chart([1, 16, 14, 15, 14, 13, 12])
                ->color('info'),
            Stat::make('مجموع التبرعات', Donation::count())->description('32% زيادة')
                ->descriptionIcon('heroicon-m-arrow-trending-up')
                ->chart([7, 2, 10, 3, 15, 4, 17])
                ->color('primary'),
            Stat::make(' مجموع المقالات', Article::count())->description('5% زيادة')
                ->descriptionIcon('heroicon-m-arrow-trending-up')
                ->chart([15, 4, 10, 2, 12, 4, 12])
                ->color('success'),

        ];
    }
}
