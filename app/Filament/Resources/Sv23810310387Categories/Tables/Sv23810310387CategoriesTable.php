<?php

namespace App\Filament\Resources\Sv23810310387Categories\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Filters\SelectFilter;

class Sv23810310387CategoriesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')->sortable()->searchable(),
                TextColumn::make('slug'),
                IconColumn::make('is_visible')
                    ->boolean()
                    ->label('Trạng thái hiển thị'),
            ])
            ->filters([
                SelectFilter::make('is_visible')
                ->options([
                    '1' => 'Đang hiển thị',
                    '0' => 'Đang ẩn',
                ])
                ->label('Lọc theo trạng thái'),
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
