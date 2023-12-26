<?php

namespace App\Filament\Resources\CharityResource\Pages;

use App\Filament\Resources\CharityResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCharities extends ListRecords
{
    protected static string $resource = CharityResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
