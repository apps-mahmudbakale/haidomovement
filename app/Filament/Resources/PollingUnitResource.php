<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PollingUnitResource\Pages;
use App\Filament\Resources\PollingUnitResource\RelationManagers;
use App\Models\PollingUnit;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PollingUnitResource extends Resource
{
    protected static ?string $model = PollingUnit::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255)
                    ->live(debounce: 1000)
                    ->afterStateUpdated(function ($state, $set, $get) {
                        if (!empty($state)) {
                            // Generate code from name (first letter of each word, uppercase, max 5 chars)
                            $code = strtoupper(
                                implode('', 
                                    array_map(function($word) {
                                        return substr($word, 0, 1);
                                    }, 
                                    array_slice(explode(' ', $state), 0, 5))
                                )
                            );
                            
                            // Add random 3 digits to ensure uniqueness
                            $code .= rand(100, 999);
                            
                            $set('code', $code);
                        }
                    }),
                Forms\Components\TextInput::make('code')
                    ->required()
                    ->unique(ignoreRecord: true)
                    ->maxLength(10)
                    ->helperText('Auto-generated from name'),
                Forms\Components\Select::make('ward_id')
                    ->relationship('ward', 'name')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('code')
                    ->searchable()
                    ->sortable()
                    ->copyable()
                    ->copyMessage('Code copied!'),
                Tables\Columns\TextColumn::make('name')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('ward.name')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('ward.lga.name')
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
            'index' => Pages\ListPollingUnits::route('/'),
            'create' => Pages\CreatePollingUnit::route('/create'),
            'edit' => Pages\EditPollingUnit::route('/{record}/edit'),
        ];
    }
}
