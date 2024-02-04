<?php
/**/
namespace App\Filament\Donor\Resources\DonationRequestResource\Pages;

use App\Filament\Donor\Resources\DonationRequestResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDonationRequest extends EditRecord
{
    protected static string $resource = DonationRequestResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
    

}
