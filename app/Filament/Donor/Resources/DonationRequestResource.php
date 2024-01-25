<?php

namespace App\Filament\Donor\Resources;

use App\Filament\Donor\Resources\DonationRequestResource\Pages;

use App\Models\DonationRequest;
use Filament\Forms\Form;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Infolist;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;

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
                TextColumn::make('delivery_code')->label('رمز التسليم')->state(function (DonationRequest $record): string {
                    if ($record->accepted == 1) {
                        return $record->delivery_code;
                    }
                    return 'لم يتم التبرع له';
                }),
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
                Tables\Actions\ViewAction::make(),
            ])
            ->bulkActions([
                //
            ])
            ->recordUrl(null);
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
        return static::$model::whereHas('donation.donor', function ($query) {
            $query->where('donor_id', auth()->user()->donor->id);
        })->count();
    }

    public static function infolist(Infolist $infolist): Infolist
    {
        return $infolist
            ->columns(2)
            ->schema([
                TextEntry::make('charity.name')->label('مقدم الطلب')->color('primary'),
                TextEntry::make('message')->label(' الرسالة ')->color('primary'),
                TextEntry::make('donation_status')->label('الحالة')->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'تم التبرع له' => 'success',
                        'ينتضر' => 'info',
                        'لم يتم التبرع له ' => 'gray',
                    }),
                TextEntry::make('delivery_code')->label('رمز التسليم')->color('primary')->state(function (DonationRequest $record): string {
                    if ($record->accepted == 1) {
                        return $record->delivery_code;
                    }
                    return 'لم يتم التبرع له';
                }),

            ]);
    }
    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()->whereHas('donation.donor', function ($query) {
            $query->where('donor_id', auth()->user()->donor->id);
        });
    }
}
