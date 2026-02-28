<?php

namespace App\Filament\Resources\StorageLocations\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class StorageLocationForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                TextInput::make('address')
                    ->required(),
                TextInput::make('capacity_small')
                    ->required()
                    ->numeric(),
                TextInput::make('capacity_medium')
                    ->required()
                    ->numeric(),
                TextInput::make('capacity_large')
                    ->required()
                    ->numeric(),
            ]);
    }
}
