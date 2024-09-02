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
use Filament\Tables\Columns\ImageColumn;
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

    protected static ?string $navigationIcon = 'heroicon-o-arrow-up-on-square-stack';

    protected static ?string $navigationLabel = 'Веб руу бичвэр оруулах';

    protected static ?string $navigationGroup = 'Бичвэр оруулах';

    protected static ?string $modelLabel = 'Постууд';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
               Group::make()->schema([
                    TextInput::make('title')->required(),
                    FileUpload::make('image')->required(),
                    MarkdownEditor::make('post')->required(),
               ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title'),
                ImageColumn::make('image'),
                TextColumn::make('post'),
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
            'index' => Pages\ListBichvers::route('/'),
            'create' => Pages\CreateBichver::route('/create'),
            'edit' => Pages\EditBichver::route('/{record}/edit'),
        ];
    }
}