<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SanalHuseltResource\Pages;
use App\Filament\Resources\SanalHuseltResource\RelationManagers;
use App\Models\Sanal_huselt;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SanalHuseltResource extends Resource
{
    protected static ?string $model = Sanal_huselt::class;

    protected static ?string $navigationIcon = 'heroicon-o-chat-bubble-bottom-center-text';

    protected static ?string $navigationLabel = 'Санал хүсэлт';

    protected static ?string $navigationGroup = 'Хэрэглэгчдээс ирэх хүсэлт';

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
                TextColumn::make('name'),
                TextColumn::make('phone'),
                TextColumn::make('comment'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                 Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListSanalHuselts::route('/'),
            'create' => Pages\CreateSanalHuselt::route('/create'),
            'edit' => Pages\EditSanalHuselt::route('/{record}/edit'),
        ];
    }
}
