<?php

namespace App\Filament\Resources\Sv23810310387Categories\Pages;

use App\Filament\Resources\Sv23810310387Categories\Sv23810310387CategoryResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListSv23810310387Categories extends ListRecords
{
    protected static string $resource = Sv23810310387CategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
