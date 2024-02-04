<?php
/**/
namespace App\Filament\Charity\Widgets;

use App\Models\DonationRequest;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class DonationRequestOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('مجموع الطلبات المرسلة ', DonationRequest::where('charity_id', auth()->user()->charity->id)->where('request_status', '<>', 'تم التبرع لجهة أخرى')->count())->description('32% زيادة')
                ->descriptionIcon('heroicon-m-arrow-trending-up')
                ->chart([7, 2, 10, 3, 15, 4, 17])
                ->color('primary'),
            Stat::make(' الطلبات المقبولة', DonationRequest::where('charity_id', auth()->user()->charity->id)->where('request_status', 'تم القبول')->count())->description('14% زيادة')
                ->descriptionIcon('heroicon-m-arrow-trending-up')
                ->chart([1, 16, 14, 15, 14, 13, 12])
                ->color('warning'),
            Stat::make('الطلبات في طور الإنتضار ', DonationRequest::where('charity_id', auth()->user()->charity->id)->where('request_status', 'تم الطلب')->count())->description('5% زيادة')
                ->descriptionIcon('heroicon-m-arrow-trending-up')
                ->chart([15, 4, 10, 2, 12, 4, 12])
                ->color('success')
        ];
    }
}
