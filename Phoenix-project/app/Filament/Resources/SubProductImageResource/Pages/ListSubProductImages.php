<?php

namespace App\Filament\Resources\SubProductImageResource\Pages;

use App\Filament\Resources\SubProductImageResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSubProductImages extends ListRecords
{
    protected static string $resource = SubProductImageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
