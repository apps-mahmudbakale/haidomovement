<?php

namespace App\Filament\Resources\PollingUnitResource\Pages;

use App\Filament\Resources\PollingUnitResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPollingUnits extends ListRecords
{
    protected static string $resource = PollingUnitResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
