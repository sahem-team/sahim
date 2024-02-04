<?php
/**/
namespace App\Filament\Resources;

use App\Filament\Resources\DonationRequestResource\Pages;
use App\Models\DonationRequest;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Components\Section;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Infolist;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class DonationRequestResource extends Resource
{
    protected static ?string $model = DonationRequest::class;

    protected static ?string $navigationLabel = 'طلبات ';
    protected static ?string $modelLabel = 'طلب  ';
    protected static ?int $navigationSort = 4;
    protected static ?string $navigationIcon = 'heroicon-s-hand-raised';
    protected static ?string $navigationGroup = 'الخدمات';
    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                Forms\Components\Select::make('request_status')->label('حالة الطلب')->options([
                    'تم الطلب' => 'تم الطلب',
                    'تم التبرع' => 'تم التبرع',
                    'تم التسليم' => 'تم التسليم',
                    'تم التبرع لجهة أخرى' => 'تم التبرع لجهة أخرى'
                ])->native(false),
                Forms\Components\TextInput::make('delivery_code')->label('رمز التسليم'),
                Forms\Components\TextInput::make('message')->label('الرسالة')
                    ->columnSpanFull(),

            ]);
    }

    public static function infolist(Infolist $infolist): Infolist
    {
        return $infolist
            ->columns(3)
            ->schema([
                Section::make()
                    ->schema([
                        ImageEntry::make('donation.image_url')->size(300)->label(''),
                    ])->columnSpan(1),
                Section::make()
                    ->schema([
                        TextEntry::make('charity.name')->label('الجهة الخيرية ')->color('primary'),
                        TextEntry::make('donation.donor.name')->label('المتبرع ')->color('primary'),
                        TextEntry::make('donation.donation_name')->label('اسم التبرع')->color('primary'),
                        TextEntry::make('donation_status')->label('الحالة')->badge()
                            ->color(fn (string $state): string => match ($state) {
                                'تم التبرع له' => 'success',
                                'ينتضر' => 'info',
                                'لم يتم التبرع له ' => 'gray',
                            }),
                        TextEntry::make('message')->label(' الرسالة ')->columnSpanFull()->color('primary'),
                    ])->columnSpan(2)->columns(2),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('charity.name')->label('الجهة الخيرية '),
                Tables\Columns\TextColumn::make('donation.donor.name')->label('المتبرع '),
                Tables\Columns\TextColumn::make('donation.donation_name')->label('اسم التبرع')->limit(10),
                Tables\Columns\ImageColumn::make('donation.image_url')->size(40)->label(' صورة التبرع'),
                Tables\Columns\TextColumn::make('message')->label(' الرسالة ')->limit(10)->extraAttributes([
                    'class' => 'max-w-xs break-words'
                ]),
                Tables\Columns\TextColumn::make('donation_status')->label('الحالة')->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'تم التبرع له' => 'success',
                        'ينتضر' => 'info',
                        'لم يتم التبرع له ' => 'gray',
                    }),
                Tables\Columns\TextColumn::make('delivery_code')->label('رمز التسليم')->state(function (DonationRequest $record): string {
                    if ($record->accepted == 1) {
                        return $record->delivery_code;
                    }
                    return 'لا يوجد';
                }),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    // Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
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
            'view' => Pages\ViewDonationRequest::route('/{record}'),
            'edit' => Pages\EditDonationRequest::route('/{record}/edit'),
        ];
    }
}
