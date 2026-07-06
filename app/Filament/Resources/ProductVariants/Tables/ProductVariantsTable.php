<?php

namespace App\Filament\Resources\ProductVariants\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\CreateAction;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class ProductVariantsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')
                    ->label('ID'),

                TextColumn::make('product.name')
                    ->label('Name')
                    ->searchable(),

                TextColumn::make('price')
                    ->money(),

                TextColumn::make('sku')
                    ->label('SKU')
                    ->sortable(),

                TextColumn::make('stock')
                    ->label('Stock')
                    ->searchable(),
                IconColumn::make('is_active')
                    ->boolean(),
                IconColumn::make('is_default')
                    ->boolean(),
            ])
            ->filters([
                //
            ])
            ->recordActions([

                EditAction::make(),

                DeleteAction::make()
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
