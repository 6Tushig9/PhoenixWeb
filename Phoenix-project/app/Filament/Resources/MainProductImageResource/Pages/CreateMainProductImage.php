<?php

namespace App\Filament\Resources\MainProductImageResource\Pages;

use App\Filament\Resources\MainProductImageResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateMainProductImage extends CreateRecord
{
    protected static string $resource = MainProductImageResource::class;
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
