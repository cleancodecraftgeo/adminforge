<?php

namespace App\Filament\Resources\Products\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;
use Filament\Schemas\Components\Utilities\Set;
use Illuminate\Support\Str;


class ProductForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('category_id')
                    ->relationship('category', 'name')
                    ->required(),

                Select::make('brand_id')
                    ->relationship('brand', 'name')
                    ->searchable()
                    ->preload()
                    ->nullable(),

                TextInput::make('name')
                    ->required()
                    ->live(onBlur:true)
                    ->afterStateUpdated(function (Set $set, ?string $state) {
                         $set('slug', Str::slug($state));
                    }),

                TextInput::make('slug')
                    ->required()
                    ->unique(ignoreRecord:true),

                TextInput::make('price')
                    ->required()
                    ->numeric()
                    ->prefix('$'),

                TextInput::make('sku')
                    ->default(fn ()=> 'PRD-'.strtoupper(Str::random(6)))
                    ->unique(ignoreRecord:true),

                Toggle::make('is_active')
                    ->required(),

                Toggle::make('is_featured')
                    ->required(),
            ]);
    }
}
