<?php

namespace App\Filament\Resources\Sv23810310387Products;

use App\Filament\Resources\Sv23810310387Products\Pages\CreateSv23810310387Product;
use App\Filament\Resources\Sv23810310387Products\Pages\EditSv23810310387Product;
use App\Filament\Resources\Sv23810310387Products\Pages\ListSv23810310387Products;
use App\Filament\Resources\Sv23810310387Products\Schemas\Sv23810310387ProductForm;
use App\Filament\Resources\Sv23810310387Products\Tables\Sv23810310387ProductsTable;
use App\Models\Sv23810310387Product;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class Sv23810310387ProductResource extends Resource
{
    protected static ?string $model = Sv23810310387Product::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $slug = '23810310387-products';
    
    public static function form(Schema $schema): Schema
    {
        return Sv23810310387ProductForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return Sv23810310387ProductsTable::configure($table);
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
            'index' => ListSv23810310387Products::route('/'),
            'create' => CreateSv23810310387Product::route('/create'),
            'edit' => EditSv23810310387Product::route('/{record}/edit'),
        ];
    }
}
