<?php

namespace App\Filament\Resources\Categories\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class CategoryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                ->placeholder('Please type name ')
                    ->required()
                    ->maxLength(255),
                TextInput::make('slug')
                ->placeholder('Please type slug ')
                    ->required()
                    ->maxLength(255),
                Textarea::make('description')
                ->placeholder('Kateqoriya haqqında ətraflı məlumat daxil edin...')
                    ->columnSpanFull(),
                Toggle::make('is_active')
                    ->default(true),

            ]);
    }
}
