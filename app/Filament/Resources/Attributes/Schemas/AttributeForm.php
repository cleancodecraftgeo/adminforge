<?php

namespace App\Filament\Resources\Attributes\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class AttributeForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required()
                    ->maxlength(255),
                TextInput::make('slug')
                    ->required(),
                Toggle::make('is_active')
                    
                    ->default(true),
                TextInput::make('sort_order')

                    ->numeric()
                    ->default(0),
            ]);
    }
}
