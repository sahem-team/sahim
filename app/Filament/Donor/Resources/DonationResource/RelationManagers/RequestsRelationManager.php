<?php

namespace App\Filament\Donor\Resources\DonationResource\RelationManagers;

use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Date;

class RequestsRelationManager extends RelationManager
{
    protected static string $relationship = 'requests';
    protected static ?string $modelLabel = 'طلبات ';


    public function form(Form $form): Form
    {
        return $form
            ->schema([
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('charity.name')->label('مقدم الطلب'),
                TextColumn::make('message')->label(' الرسالة ')->limit(80)->extraAttributes([
                    'class' => 'max-w-xs break-words'
                ]),
                TextColumn::make('created_at')->label('تاريخ الطلب')->since(),
            ])
            ->filters([
                //
            ])
            ->headerActions([
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([

            ])->heading('الطلبات')
            ;
    }
}
