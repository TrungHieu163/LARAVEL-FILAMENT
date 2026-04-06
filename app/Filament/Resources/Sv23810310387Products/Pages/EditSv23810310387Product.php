<?php

namespace App\Filament\Resources\Sv23810310387Products\Pages;

use App\Filament\Resources\Sv23810310387Products\Sv23810310387ProductResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditSv23810310387Product extends EditRecord
{
    protected static string $resource = Sv23810310387ProductResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
