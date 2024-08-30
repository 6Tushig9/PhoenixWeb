<?php

namespace App\Filament\Resources\LogonuudResource\Pages;

use App\Filament\Resources\LogonuudResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditLogonuud extends EditRecord
{
    protected static string $resource = LogonuudResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
