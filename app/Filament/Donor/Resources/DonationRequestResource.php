<?php

namespace App\Filament\Donor\Resources;

use App\Filament\Donor\Resources\DonationRequestResource\Pages;
use App\Filament\Donor\Resources\DonationRequestResource\RelationManagers;
use App\Filament\Donor\Resources\DonationResource\RelationManagers\RequestsRelationManager;
use App\Models\DonationRequest;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DonationRequestResource extends Resource
{
    protected static ?string $model = DonationRequest::class;
    protected static ?string $navigationLabel = 'طلبات';
    protected static ?string $modelLabel = 'طلب ';
    protected static ?int $navigationSort = 2;
    protected static ?string $navigationIcon = 'heroicon-s-inbox-arrow-down';


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
                TextColumn::make('donation.donation_name')->label('الاسم'),
                TextColumn::make('charity.name')->label('مقدم الطلب'),
                TextColumn::make('message')->label(' الرسالة ')->limit(30)->extraAttributes([
                    'class' => 'max-w-xs break-words'
                ]),
                TextColumn::make('donation_status')->label('الحالة')->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'تم التبرع له' => 'success',
                        'ينتضر' => 'info',
                        'لم يتم التبرع له ' => 'gray',
                    }),
            ])
            ->filters([
                //
            ])
            ->actions([

            ])
            ->bulkActions([
                //
            ]);
    }

    public static function getRelations(): array
    {
        return [
            RequestsRelationManager::class
        ];
    }

    public static function canCreate(): bool
    {
        return false;
    }


    public static function getPages(): array
    {
        return [
            'index' => Pages\ListDonationRequests::route('/'),
            'create' => Pages\CreateDonationRequest::route('/create'),
            'edit' => Pages\EditDonationRequest::route('/{record}/edit'),
        ];
    }
    public static function getNavigationBadge(): ?string
    {
        return static::$model::count();
    }
}
