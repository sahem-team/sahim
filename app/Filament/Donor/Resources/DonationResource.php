<?php

namespace App\Filament\Donor\Resources;

use App\Filament\Donor\Resources\DonationResource\Pages;
use App\Filament\Donor\Resources\DonationResource\RelationManagers;
use App\Models\Donation;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DonationResource extends Resource
{
    protected static ?string $model = Donation::class;
    protected static ?string $navigationLabel = 'تبرعات';
    protected static ?string $modelLabel = 'تبرع ';
    protected static ?int $navigationSort = 1;
    protected static ?string $navigationIcon = 'heroicon-s-heart';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('donation_name')->label('الاسم')
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('donation_name')->label('الاسم'),
                TextColumn::make('description')->label('الوصف')->html(),
                ImageColumn::make('image_url'),
                TextColumn::make('quantity_type')->label(' نوع الكمية'),
                TextColumn::make('quantity')->label('الكمية'),
                TextColumn::make('expiration_date')->label('تاريخ الانتهاء'),
                TextColumn::make('status')->label('الحالة'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
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
            'index' => Pages\ListDonations::route('/'),
            'create' => Pages\CreateDonation::route('/create'),
            'view' => Pages\ViewDonation::route('/{record}'),
            'edit' => Pages\EditDonation::route('/{record}/edit'),
        ];
    }
}
