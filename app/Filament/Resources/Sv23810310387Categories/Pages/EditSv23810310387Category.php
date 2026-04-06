<?php

namespace App\Filament\Resources\Sv23810310387Categories\Pages;

use App\Filament\Resources\Sv23810310387Categories\Sv23810310387CategoryResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditSv23810310387Category extends EditRecord
{
    protected static string $resource = Sv23810310387CategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
