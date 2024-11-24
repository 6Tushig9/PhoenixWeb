<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SanalResource\Pages;
use App\Filament\Resources\SanalResource\RelationManagers;
use App\Models\Sanal;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SanalResource extends Resource
{
    protected static ?string $model = Sanal::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Харилцагчид';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->label('Name'),
                Forms\Components\TextInput::make('phone_number')
                    ->required()
                    ->numeric()
                    ->label('Phone Number'),
                Forms\Components\Textarea::make('sanal_huselt')
                    ->required()
                    ->label('Sanal Huselt'),
            ]);

    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name'),
                TextColumn::make('phone_number')->numeric(),
                TextColumn::make('sanal_huselt')->wrap(),
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
            'index' => Pages\ListSanals::route('/'),
            'create' => Pages\CreateSanal::route('/create'),
            'edit' => Pages\EditSanal::route('/{record}/edit'),
        ];
    }
}