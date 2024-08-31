<?php

namespace App\Filament\Resources\HamtrahHuseltResource\Pages;

use App\Filament\Resources\HamtrahHuseltResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditHamtrahHuselt extends EditRecord
{
    protected static string $resource = HamtrahHuseltResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
