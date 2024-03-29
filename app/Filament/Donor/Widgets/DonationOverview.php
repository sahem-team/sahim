<?php
/**/
namespace App\Filament\Donor\Widgets;

use App\Models\Donation;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class DonationOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('مجموع التبرعات', Donation::where('donor_id', auth()->user()->donor->id)->count())->description('32% زيادة')
                ->descriptionIcon('heroicon-m-arrow-trending-up')
                ->chart([7, 2, 10, 3, 15, 4, 17])
                ->color('primary'),
            Stat::make('التبرعات المتوفرة', Donation::where('donor_id', auth()->user()->donor->id)->where('status', 'مُدرج')->count())->description('14% زيادة')
                ->descriptionIcon('heroicon-m-arrow-trending-up')
                ->chart([1, 16, 14, 15, 14, 13, 12])
                ->color('warning'),
            Stat::make('التبرعات المحجوزة', Donation::where('donor_id', auth()->user()->donor->id)->where('status', 'تم التبرع')->count())->description('5% زيادة')
                ->descriptionIcon('heroicon-m-arrow-trending-up')
                ->chart([15, 4, 10, 2, 12, 4, 12])
                ->color('success')
        ];
    }
}
