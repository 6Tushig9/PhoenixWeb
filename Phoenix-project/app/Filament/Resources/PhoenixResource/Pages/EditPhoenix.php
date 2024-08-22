<?php

namespace App\Filament\Resources\PhoenixResource\Pages;

use App\Filament\Resources\PhoenixResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPhoenix extends EditRecord
{
    protected static string $resource = PhoenixResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
