<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DrinksResource\Pages;
use App\Filament\Resources\DrinksResource\RelationManagers;
use App\Models\Drink;
use Doctrine\DBAL\Schema\Column;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Nette\Utils\Html;

class DrinksResource extends Resource
{
    protected static ?string $model = Drink::class;

    protected static ?string $navigationIcon = 'heroicon-o-building-storefront';
    protected static ?string $navigationLabel = 'Manage Drinks';
    protected static ?string $label = 'Manage Drinks';
    protected static ?string $navigationGroup = 'Mangement';
    protected static ?string $slug = 'drinks';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')
                    ->required()
                    ->maxLength(255),
                TextInput::make('price')
                    ->required()
                    ->numeric(),
                RichEditor::make('description')
                    ->disableToolbarButtons(['attachFiles', 'codeBlock'])
                    ->columnSpan(2),
                FileUpload::make('image')
                    ->required()
                    ->image()
                    ->directory('drinks')
                    ->disk('public')
                    ->maxSize(15360)
                    ->label('Drink Image')
            ])
            ->columns(2);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image')
                    ->width(140)
                    ->height(100)
                    ->disk('public')
                    ->label('Drink Image'),
                TextColumn::make('title')
                    ->searchable(),
                TextColumn::make('price')
                    ->sortable(),
                TextColumn::make('description')
                    ->html()
                    ->limit(50),
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
            ])
            ->emptyStateDescription('Silahkan Tambahkan Menu!')
            ->emptyStateIcon('heroicon-o-document-arrow-up');
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
            'index' => Pages\ListDrinks::route('/'),
            'create' => Pages\CreateDrinks::route('/create'),
            'edit' => Pages\EditDrinks::route('/{record}/edit'),
        ];
    }
}
