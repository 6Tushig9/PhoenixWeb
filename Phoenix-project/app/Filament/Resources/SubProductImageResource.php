<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SubProductImageResource\Pages;
use App\Filament\Resources\SubProductImageResource\RelationManagers;
use App\Models\SubProductImage;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\RichtextEditor;
use Filament\Forms\Components\TextInput;
use App\Models\SubProduct;

class SubProductImageResource extends Resource
{
    protected static ?string $model = SubProductImage::class;

    protected static ?string $navigationLabel = 'Дагавар загварын зураг';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Group::make([
                    Select::make('sub_product_id')
                        ->options(SubProduct::all()->pluck('Загвар', 'id')),
                    FileUpload::make('Зураг_1')
                        ->required(),
                    FileUpload::make('Зураг_2')
                        ->required(),
                    FileUpload::make('Зураг_3')
                        ->required(),
                    FileUpload::make('Зураг_4')
                        ->required(),
                    FileUpload::make('Зураг_5')
                        ->required(),
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('Загвар'),
                ImageColumn::make('Зураг_1'),
                ImageColumn::make('Зураг_2'),
                ImageColumn::make('Зураг_3'),
                ImageColumn::make('Зураг_4'),
                ImageColumn::make('Зураг_5'),
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
            'index' => Pages\ListSubProductImages::route('/'),
            'create' => Pages\CreateSubProductImage::route('/create'),
            'edit' => Pages\EditSubProductImage::route('/{record}/edit'),
        ];
    }
}
