<?php

namespace App\Filament\Resources\SanalHuseltResource\Pages;

use App\Filament\Resources\SanalHuseltResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSanalHuselt extends EditRecord
{
    protected static string $resource = SanalHuseltResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
