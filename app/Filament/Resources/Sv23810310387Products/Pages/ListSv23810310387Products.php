<?php

namespace App\Filament\Resources\Sv23810310387Products\Pages;

use App\Filament\Resources\Sv23810310387Products\Sv23810310387ProductResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListSv23810310387Products extends ListRecords
{
    protected static string $resource = Sv23810310387ProductResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
