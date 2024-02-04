<?php
/**/
namespace App\Filament\Donor\Resources\DonationResource\Pages;

use App\Filament\Donor\Resources\DonationResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewDonation extends ViewRecord
{
    protected static string $resource = DonationResource::class;
    protected static ?string $navigationLabel = 'عرض التبرع ';

    protected function getHeaderActions(): array
    {
        return [
        ];
    }
}
