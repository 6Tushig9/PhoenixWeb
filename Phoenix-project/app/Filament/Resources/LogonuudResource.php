<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LogonuudResource\Pages;
use App\Filament\Resources\LogonuudResource\RelationManagers;
use App\Models\Logonuud;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class LogonuudResource extends Resource
{
    protected static ?string $model = Logonuud::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Лого оруулах';

    protected static ?string $navigationLabel = 'Газруудын лого оруулах';

    protected static ?string $modelLabel = 'Зурагнууд';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Group::make()
                ->schema([
                    TextInput::make('name'),
                    FileUpload::make('image'),
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name'),
                TextColumn::make('image'),
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
            'index' => Pages\ListLogonuuds::route('/'),
            'create' => Pages\CreateLogonuud::route('/create'),
            'edit' => Pages\EditLogonuud::route('/{record}/edit'),
        ];
    }
}