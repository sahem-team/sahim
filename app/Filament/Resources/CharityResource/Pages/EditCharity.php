<?php

namespace App\Filament\Resources\CharityResource\Pages;

use App\Filament\Resources\CharityResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCharity extends EditRecord
{
    protected static string $resource = CharityResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
