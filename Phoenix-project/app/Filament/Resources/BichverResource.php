<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BichverResource\Pages;
use App\Filament\Resources\BichverResource\RelationManagers;
use App\Models\PostOruulah;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class BichverResource extends Resource
{
    protected static ?string $model = PostOruulah::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationLabel = 'Веб руу пост бичвэр оруулах';

    protected static ?string $navigationGroup = 'Пост оруулах';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
               Group::make()
               ->schema([
                    TextInput::make('title'),
                    FileUpload::make('image'),
                    MarkdownEditor::make('post'),
               ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title'),
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
            'index' => Pages\ListBichvers::route('/'),
            'create' => Pages\CreateBichver::route('/create'),
            'edit' => Pages\EditBichver::route('/{record}/edit'),
        ];
    }
}