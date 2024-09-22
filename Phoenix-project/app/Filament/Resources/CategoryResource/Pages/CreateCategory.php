<?php

namespace App\Filament\Resources\CategoryResource\Pages;

use App\Filament\Resources\CategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateCategory extends CreateRecord
{
    protected static string $resource = CategoryResource::class;

    protected function afterSave()
    {
        // Get the current record
        $record = $this->record;

        // Sync the selected products
        $record->mainProducts()->sync($this->form->getState()['main_products']);
        $record->subProducts()->sync($this->form->getState()['sub_products']);
    }
}
