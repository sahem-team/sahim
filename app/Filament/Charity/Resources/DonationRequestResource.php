<?php

namespace App\Filament\Charity\Resources;

use App\Filament\Charity\Resources\DonationRequestResource\Pages;
use App\Filament\Charity\Resources\DonationRequestResource\RelationManagers;
use App\Models\DonationRequest;
use Filament\Forms;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
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
    protected static ?int $navigationSort = 1;
    protected static ?string $navigationIcon = 'heroicon-s-paper-airplane';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Textarea::make('message')
                    ->label('الوصف')
                    ->rows(10)
                    ->columnSpanFull()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('donation.donation_name')->label('الاسم'),
                ImageColumn::make('donation.image_url')->label('الصورة'),
                TextColumn::make('message')->label(' الرسالة ')->limit(60)->extraAttributes([
                    'class' => 'max-w-xs break-words'
                ]),
                TextColumn::make('request_status')->label('الحالة')->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'تم القبول' => 'success',
                        'تم الطلب' => 'info',
                        'تم التبرع لجهة أخرى' => 'gray',
                    }),
            ])
            ->filters([
                //
            ])
            ->actions([
            Tables\Actions\Action::make('download')
                ->label('تحميل الوصل')
                ->color('info')
                ->url(
                    fn (DonationRequest $record): string => route('receipt.pdf', ['donation_request' => $record->id]),
                    shouldOpenInNewTab: true
                )->visible(fn ($record) => $record->accepted),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),

            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([]),
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
            'edit' => Pages\EditDonationRequest::route('/{record}/edit'),
        ];
    }

    public static function getNavigationBadge(): ?string
    {
        return static::$model::count();
    }
}
