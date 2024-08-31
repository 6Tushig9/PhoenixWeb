<?php

namespace App\Filament\Resources\SanalHuseltResource\Pages;

use App\Filament\Resources\SanalHuseltResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSanalHuselts extends ListRecords
{
    protected static string $resource = SanalHuseltResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
