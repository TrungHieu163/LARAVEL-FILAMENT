<?php

namespace App\Filament\Resources\Sv23810310387Products\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Utilities\Set;
use Illuminate\Support\Str;

class Sv23810310387ProductForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Grid::make(2)
                ->schema([
                    TextInput::make('name')
                        ->required()
                        ->live(onBlur: true)
                        ->afterStateUpdated(fn (?string $state, Set $set) => $set('slug', Str::slug($state))),

                    TextInput::make('slug')
                        ->required()
                        ->unique(ignoreRecord: true),

                    Select::make('category_id')
                        ->relationship('category', 'name')
                        ->required(),

                    TextInput::make('price')
                        ->numeric()
                        ->minValue(0)
                        ->prefix('VNĐ')
                        ->required(),

                    TextInput::make('stock_quantity')
                        ->integer()
                        ->minValue(0)
                        ->required(),

                    Select::make('status')
                        ->options([
                            'draft' => 'Nháp',
                            'published' => 'Đã đăng',
                            'out_of_stock' => 'Hết hàng',
                        ])
                        ->required(),

                    TextInput::make('discount_percent')
                        ->numeric()
                        ->label('Giảm giá (%)')
                        ->minValue(0)
                        ->maxValue(100)
                        ->default(0),

                    FileUpload::make('image_path')
                        ->image()
                        ->directory('products')
                        ->columnSpanFull(),

                    RichEditor::make('description')
                        ->columnSpanFull(),
                ])
            ]);
    }
}
