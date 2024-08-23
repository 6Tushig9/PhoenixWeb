<?php

namespace App\Filament\Resources\PhoenixResource\Pages;

use App\Filament\Resources\PhoenixResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPhoenixes extends ListRecords
{
    protected static string $resource = PhoenixResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
