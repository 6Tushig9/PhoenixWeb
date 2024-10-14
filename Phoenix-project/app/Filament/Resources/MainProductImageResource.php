<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MainProductImageResource\Pages;
use App\Filament\Resources\MainProductImageResource\RelationManagers;
use App\Models\MainProductImage;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\RichtextEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Models\MainProduct;

class MainProductImageResource extends Resource
{
    protected static ?string $model = MainProductImage::class;

    protected static ?string $navigationLabel = 'Загварын зураг';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Group::make([
                    Select::make('main_product_id')
                        ->options(MainProduct::all()->pluck('Бүтээгдэхүүн', 'id')),
                    FileUpload::make('Зураг_1')
                        ->required(),
                    FileUpload::make('Зураг_2')
                        ->required(),
                    FileUpload::make('Зураг_3')
                        ->required(),
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('image.Бүтээгдэхүүн'),
                ImageColumn::make('Зураг_1'),
                ImageColumn::make('Зураг_2'),
                ImageColumn::make('Зураг_3'),
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
            'index' => Pages\ListMainProductImages::route('/'),
            'create' => Pages\CreateMainProductImage::route('/create'),
            'edit' => Pages\EditMainProductImage::route('/{record}/edit'),
        ];
    }
}
