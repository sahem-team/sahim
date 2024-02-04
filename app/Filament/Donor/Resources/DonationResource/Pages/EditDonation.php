<?php
/**/
namespace App\Filament\Donor\Resources\DonationResource\Pages;

use App\Filament\Donor\Resources\DonationResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDonation extends EditRecord
{
    protected static string $resource = DonationResource::class;
    protected static ?string $navigationLabel = 'تعديل التبرع ';



    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('view', ['record' => $this->getRecord()]);
    }
}
