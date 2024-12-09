<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MainProductResource\Pages;
use App\Filament\Resources\MainProductResource\RelationManagers;
use App\Models\MainProduct;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\NumberColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Tables\View\TablesRenderHook;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class MainProductResource extends Resource
{
    protected static ?string $model = MainProduct::class;

    protected static ?string $navigationGroup = 'Products';

    protected static ?string $navigationLabel = 'Халаагуур';

    protected static ?string $modelLabel = 'Халаагуур';

    protected static ?string $navigationIcon = 'heroicon-o-bolt';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Group::make([
                    TextInput::make('product_name')->required(),
                    TextInput::make('ontslog_shinj')->required(),
                    FileUpload::make('image')->required(),
                    TextInput::make('price')->numeric()->required(),
                    MarkdownEditor::make('brief_information')->required(),
                    TextInput::make('quantity')->numeric()->required(),
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('product_name'),
                TextColumn::make('ontslog_shinj'),
                ImageColumn::make('image'),
                NumberColumn::make('price')->format('0,0.00'),
                TextColumn::make('brief_information')->wrap(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\Action::make('Category')
                    ->color('gray')
                    ->icon('heroicon-o-cpu-chip')
                    ->url(fn(MainProduct $record)=>route('filament.admin.resources.sub-products.create',['main_product_id'=>$record->id])),
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
            'index' => Pages\ListMainProducts::route('/'),
            'create' => Pages\CreateMainProduct::route('/create'),
            'edit' => Pages\EditMainProduct::route('/{record}/edit'),
        ];
    }
}
