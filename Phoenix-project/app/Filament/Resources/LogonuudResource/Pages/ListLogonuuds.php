<?php

namespace App\Filament\Resources\LogonuudResource\Pages;

use App\Filament\Resources\LogonuudResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListLogonuuds extends ListRecords
{
    protected static string $resource = LogonuudResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
