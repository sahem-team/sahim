<?php

namespace App\Filament\Charity\Resources\DonationRequestResource\Pages;

use App\Filament\Charity\Resources\DonationRequestResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDonationRequest extends EditRecord
{
    protected static string $resource = DonationRequestResource::class;

    protected function getHeaderActions(): array
    {
        return [
        ];
    }
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
