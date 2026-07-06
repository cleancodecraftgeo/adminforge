<?php

namespace App\Filament\Resources\ProductVariants\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;
use Filament\Forms\Components\MultiSelect;

class ProductVariantForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('price')
                    ->numeric()
                    ->prefix('₾'),
                TextInput::make('sku')
                    ->default(fn() => 'SKU-' . str_pad(
                        \App\Models\ProductVariant::count() + 1,
                        6,
                        '0',
                        STR_PAD_LEFT
                    ))
                    ->disabled()
                    ->dehydrated()
                    ->unique(ignoreRecord: true),

                Toggle::make('is_active'),

                TextInput::make('stock')
                    ->numeric()
                    ->required()
                    ->default(0),



                Toggle::make('is_default'),

                MultiSelect::make('attributeValues')
                    ->relationship('attributeValues', 'value')
            ]);
    }
}
