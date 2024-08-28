<?php

namespace App\Filament\Resources\BichverResource\Pages;

use App\Filament\Resources\BichverResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBichver extends EditRecord
{
    protected static string $resource = BichverResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
