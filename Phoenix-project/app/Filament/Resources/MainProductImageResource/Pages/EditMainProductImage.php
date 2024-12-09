<?php

namespace App\Filament\Resources\MainProductImageResource\Pages;

use App\Filament\Resources\MainProductImageResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMainProductImage extends EditRecord
{
    protected static string $resource = MainProductImageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
