<?php
/**/
namespace App\Filament\Charity\Resources\DonationRequestResource\Pages;

use App\Filament\Charity\Resources\DonationRequestResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDonationRequests extends ListRecords
{
    protected static string $resource = DonationRequestResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
