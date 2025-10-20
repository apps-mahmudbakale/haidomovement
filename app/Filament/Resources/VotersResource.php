<?php

namespace App\Filament\Resources;

use App\Filament\Resources\VotersResource\Pages;
use App\Filament\Resources\VotersResource\RelationManagers;
use App\Models\Voter;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class VotersResource extends Resource
{
    protected static ?string $model = Voter::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('full_name')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('gender')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('age_range')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('phone_number')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('email')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('residential_address')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('lga.name')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('ward.name')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('polling_unit.name')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('voters_card_number')
                    ->searchable()
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListVoters::route('/'),
            'create' => Pages\CreateVoters::route('/create'),
            'edit' => Pages\EditVoters::route('/{record}/edit'),
        ];
    }
}
