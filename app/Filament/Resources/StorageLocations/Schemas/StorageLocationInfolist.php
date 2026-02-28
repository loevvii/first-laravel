<?php

namespace App\Filament\Resources\StorageLocations\Schemas;

use App\Models\StorageLocation;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class StorageLocationInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('name'),
                TextEntry::make('address'),
                TextEntry::make('capacity_small')
                    ->numeric(),
                TextEntry::make('capacity_medium')
                    ->numeric(),
                TextEntry::make('capacity_large')
                    ->numeric(),
                TextEntry::make('created_at')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('updated_at')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('deleted_at')
                    ->dateTime()
                    ->visible(fn (StorageLocation $record): bool => $record->trashed()),
            ]);
    }
}
