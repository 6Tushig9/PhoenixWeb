<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TypeCategoryResource\Pages;
use App\Filament\Resources\TypeCategoryResource\RelationManagers;
use App\Models\TypeCategory;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Nette\Utils\ImageColor;

class TypeCategoryResource extends Resource
{
    protected static ?string $model = TypeCategory::class;

    protected static ?string $navigationIcon = 'heroicon-o-circle-stack';

    protected static ?string $navigationGroup = 'Бүтээгдэхүүн';

    protected static ?string $navigationLabel = 'Загварууд';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('model'),
                ImageColumn::make('image'),
                TextColumn::make('price'),
                TextColumn::make('number'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListTypeCategories::route('/'),
            'create' => Pages\CreateTypeCategory::route('/create'),
            'edit' => Pages\EditTypeCategory::route('/{record}/edit'),
        ];
    }
}