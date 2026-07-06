<?php

namespace App\Filament\Resources\Products\RelationManagers;

use App\Filament\Resources\Attributes\AttributeResource;
use Filament\Actions\CreateAction;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables\Table;

use Filament\Actions\AttachAction;
use Filament\Actions\DetachAction;
use Filament\Actions\DetachBulkAction;
use Filament\Actions\BulkActionGroup;
use Filament\Tables\Columns\TextColumn;

class AttributesRelationManager extends RelationManager
{
    protected static string $relationship = 'attributes';

    protected static ?string $relatedResource = AttributeResource::class;

    public function table(Table $table): Table
{
    return $table
        ->recordTitleAttribute('name')
        ->columns([
            TextColumn::make('name')
                ->searchable(),

            TextColumn::make('slug')
                ->searchable(),
        ])
        ->headerActions([
            AttachAction::make(),
        ])
        ->recordActions([
            DetachAction::make(),
        ])
        ->toolbarActions([
            BulkActionGroup::make([
                DetachBulkAction::make(),
            ]),
        ]);
}
}
