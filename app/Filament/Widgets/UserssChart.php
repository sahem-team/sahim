<?php

namespace App\Filament\Widgets;

use App\Models\User;
use Filament\Widgets\ChartWidget;
use Flowframe\Trend\Trend;
use Flowframe\Trend\TrendValue;

class UserssChart extends ChartWidget
{
    protected static ?string $heading = 'المستخدمين';
    protected static ?array $options = [
        'plugins' => [
            'legend' => [
                'display' => false,
            ],
        ],
    ];
    public ?string $filter = 'user';

    protected function getFilters(): ?array
    {
        return [
            'charity' => 'الجهات الخيرية',
            'donor' => 'المتبرعين',
            'user'=> 'الكل'

        ];
    }

    protected function getType(): string
    {
        return 'line';
    }

    protected function getData(): array
    {
        $activeFilter = $this->filter;
        $query = User::query();

        // Check if the filter is set to 'user', include both donors and charities
        if ($activeFilter === 'user') {
            $query->whereIn('role', ['donor', 'charity']);
        } else {
            $query->where('role', $activeFilter);
        }

        $data = Trend::query($query)
            ->between(
                start: now()->startOfYear(),
                end: now()->endOfYear(),
            )
            ->perMonth()
            ->count();

        return [
            'datasets' => [
                [
                    'data' => $data->map(fn (TrendValue $value) => $value->aggregate),

                    'fill' => 'start',
                ],
            ],
            'labels' => ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
        ];
    }




}
