<?php

namespace App\Filament\Resources\CharityResource\Pages;

use App\Filament\Resources\CharityResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewCharity extends ViewRecord
{
    protected static string $resource = CharityResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
