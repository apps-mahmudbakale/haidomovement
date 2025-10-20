<?php

namespace App\Filament\Resources\PollingUnitResource\Pages;

use App\Filament\Resources\PollingUnitResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPollingUnit extends EditRecord
{
    protected static string $resource = PollingUnitResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
