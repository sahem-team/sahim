<?php

namespace App\Filament\Donor\Resources\DonationResource\Pages;

use App\Filament\Donor\Resources\DonationResource;
use App\Models\DonationRequest;
use Filament\Actions;
use Filament\Actions\EditAction;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Infolists\Components\IconEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Infolist;
use Filament\Resources\Pages\ManageRelatedRecords;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Contracts\Support\Htmlable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ManageDonationRequests extends ManageRelatedRecords
{
    protected static string $resource = DonationResource::class;

    protected static string $relationship = 'requests';
    protected static ?string $navigationLabel = 'الطلبات  ';

    protected static ?string $navigationIcon = 'heroicon-o-inbox-arrow-down';

    public function getTitle(): string | Htmlable
    {
        return "الطلبات المقدمة";
    }


    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Toggle::make('accepted')
                    ->label(' قبول الطلب')
                    ->onIcon('heroicon-m-check-badge')
                    ->offIcon('heroicon-m-arrow-left')

            ])
            ->columns(1);
    }

    public function infolist(Infolist $infolist): Infolist
    {
        return $infolist
            ->columns(2)
            ->schema([
                TextEntry::make('charity.name')->label('مقدم الطلب')->color('primary'),
                TextEntry::make('message')->label(' الرسالة ')->color('primary')
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('title')
            ->columns([
                TextColumn::make('charity.name')->label('مقدم الطلب'),
                TextColumn::make('message')->label(' الرسالة ')->limit(50)->extraAttributes([
                    'class' => 'max-w-xs break-words'
                ]),
                TextColumn::make('donation_status')->label('الحالة')->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'تم التبرع له' => 'success',
                        'ينتضر' => 'info',
                        'لم يتم التبرع له ' => 'gray',
                    }),
                TextColumn::make('delivery_code')->label('رمز التسليم')->state(function (DonationRequest $record): string {
                if ($record->accepted == 1) {
                    return $record->delivery_code;
                }
                return 'لم يتم التبرع له';
            }),
            ])
            ->filters([
                //
            ])
            ->headerActions([])
            ->actions([
                Tables\Actions\ViewAction::make()->modalHeading('عرض  الطلب'),
                Tables\Actions\EditAction::make()->modalHeading('تعديل الطلب')->after(function ($record) {
                    if ($record->accepted) {
                        $randomNumber = mt_rand(100000, 999999);
                        $deliveryCode = '#' . $randomNumber;
                        $record->delivery_code = $deliveryCode;
                        $record->donation_status = 'تم التبرع له';
                        $record->request_status = 'تم القبول';
                        $record->save();
                    }
                }),
            ])
            ->groupedBulkActions([])
            ->emptyStateHeading('  لا توجد طلبات بعد');
    }

}
