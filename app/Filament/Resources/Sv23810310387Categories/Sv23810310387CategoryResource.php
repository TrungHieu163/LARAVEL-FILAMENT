<?php

namespace App\Filament\Resources\Sv23810310387Categories;

use App\Filament\Resources\Sv23810310387Categories\Pages\CreateSv23810310387Category;
use App\Filament\Resources\Sv23810310387Categories\Pages\EditSv23810310387Category;
use App\Filament\Resources\Sv23810310387Categories\Pages\ListSv23810310387Categories;
use App\Filament\Resources\Sv23810310387Categories\Schemas\Sv23810310387CategoryForm;
use App\Filament\Resources\Sv23810310387Categories\Tables\Sv23810310387CategoriesTable;
use App\Models\Sv23810310387Category;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class Sv23810310387CategoryResource extends Resource
{
    protected static ?string $model = Sv23810310387Category::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return Sv23810310387CategoryForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return Sv23810310387CategoriesTable::configure($table);
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
            'index' => ListSv23810310387Categories::route('/'),
            'create' => CreateSv23810310387Category::route('/create'),
            'edit' => EditSv23810310387Category::route('/{record}/edit'),
        ];
    }
}
