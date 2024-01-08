<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DonationResource\Pages;
use App\Filament\Resources\DonationResource\RelationManagers;
use App\Models\Donation;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Components\Section;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Infolist;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DonationResource extends Resource
{
    protected static ?string $model = Donation::class;

    protected static ?string $navigationLabel = 'تبرعات';
    protected static ?string $modelLabel = 'تبرع ';
    protected static ?int $navigationSort = 2;
    protected static ?string $navigationIcon = 'heroicon-s-sparkles';
    protected static ?string $navigationGroup = 'الخدمات';
    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                Forms\Components\TextInput::make('donation_name')->label('اسم التبرع'),
                Forms\Components\DatePicker::make('expiration_date')->label('تاريخ الانتهاء'),
                Forms\Components\TextInput::make('quantity_type')->label('نوع الكمية'),
                Forms\Components\TextInput::make('quantity')->label('الكمية'),
                Forms\Components\RichEditor::make('description')->label('الوصف')
                    ->columnSpanFull(),
                Forms\Components\FileUpload::make('image_url')->label('صورة التبرع')
                    ->image()
                ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('donor.name')->label('المتبرع')->searchable(),
                Tables\Columns\ImageColumn::make('image_url')->label('صورة التبرع')->size(40),
                Tables\Columns\TextColumn::make('donation_name')->label('اسم التبرع')->searchable(),
                Tables\Columns\TextColumn::make('quantity_type')->label('نوع الكمية'),
                Tables\Columns\TextColumn::make('quantity')->label('الكمية'),
                Tables\Columns\TextColumn::make('created_at')->date()->since()->label('تاريخ النشر  ')->sortable(),
                Tables\Columns\TextColumn::make('expiration_date')->date()->since()->label('تاريخ الانتهاء ')->sortable(),
                Tables\Columns\TextColumn::make('status')->label('الحالة')->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'مُدرج' => 'success',
                        'تم التبرع' => 'info',
                        'تم التسليم' => 'gray',
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

    public static function infolist(Infolist $infolist): Infolist
    {
        return $infolist
            ->columns(3)
            ->schema([
                Section::make()
                    ->schema([
                        ImageEntry::make('image_url')->size(300)->label(''),
                    ])->columnSpan(1),
                Section::make()
                    ->schema([
                        TextEntry::make('donor.name')->label('المتبرع')->color('primary'),
                        TextEntry::make('donation_name')->label('اسم التبرع')->color('primary'),

                        TextEntry::make('quantity_type')->label('نوع الكمية')->color('primary'),
                        TextEntry::make('quantity')->label('الكمية')->color('primary'),

                        TextEntry::make('created_at')->date()->since()->label('تاريخ النشر  ')->color('primary'),
                        TextEntry::make('expiration_date')->date()->since()->label('تاريخ الانتهاء ')->color('primary'),

                        TextEntry::make('status')->label('الحالة')->badge()
                            ->color(fn (string $state): string => match ($state) {
                                'مُدرج' => 'success',
                                'تم التبرع' => 'info',
                                'تم التسليم' => 'gray',
                            }),



                    ])->columnSpan(2)->columns(2)
            ]);
    }

    public static function canCreate(): bool
    {
        return false;
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
