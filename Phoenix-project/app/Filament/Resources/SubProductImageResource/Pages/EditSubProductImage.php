<?php

namespace App\Filament\Resources\SubProductImageResource\Pages;

use App\Filament\Resources\SubProductImageResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSubProductImage extends EditRecord
{
    protected static string $resource = SubProductImageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
