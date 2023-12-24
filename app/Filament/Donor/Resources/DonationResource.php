<?php

namespace App\Filament\Donor\Resources;

use App\Filament\Donor\Resources\DonationResource\Pages;
use App\Filament\Donor\Resources\DonationResource\RelationManagers;
use App\Filament\Donor\Resources\DonationResource\RelationManagers\RequestsRelationManager;
use App\Models\Donation;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Infolists\Components;
use Filament\Infolists\Infolist;
use Filament\Pages\SubNavigationPosition;
use Filament\Resources\Pages\Page;





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
                Forms\Components\Section::make()
                    ->schema([


                        TextInput::make('donation_name')
                            ->label('الاسم')->required()
                            ->maxLength(255),
                        Select::make('quantity_type')
                            ->label(' نوع الكمية')
                            ->options([
                                'box' => 'علبة',
                                'item' => 'قطعة',
                                'unit' => 'حبة',
                                'plate' => 'طبق',
                                'bag' => 'كيس',
                                'package' => 'رزمة',
                                'bottle' => 'قنينة',
                                'kilogram' => 'كيلوغرام',
                                'liter' => 'لتر',
                                'gram' => 'غرام',
                                'milliliter' => 'مليلتر',
                            ]),

                        TextInput::make('quantity')
                            ->label('الكمية'),
                        DatePicker::make('expiration_date')
                            ->label('تاريخ الانتهاء'),

                    ])
                    ->columns(4),

                Forms\Components\Section::make('الوصف')
                    ->schema([
                        Forms\Components\RichEditor::make('description')
                            ->required()
                            ->columnSpan('full')->hiddenLabel(),
                    ])
                    ->collapsible(),
                Forms\Components\Section::make('الصورة')
                    ->schema([
                        Forms\Components\FileUpload::make('image_url')
                            ->image()
                            ->hiddenLabel(),
                    ])
                    ->collapsible(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('donation_name')->label('الاسم'),
                TextColumn::make('description')->label('الوصف')->html()->limit(30),
                ImageColumn::make('image_url')->label('الصورة'),
                TextColumn::make('quantity_type')->label(' نوع الكمية'),
                TextColumn::make('quantity')->label('الكمية'),
                TextColumn::make('expiration_date')->label('تاريخ الانتهاء')->since(),
                TextColumn::make('requests_count')->label('عدد الطلبات')->counts('requests'),
                TextColumn::make('status')->label('الحالة')->badge()
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
            ])
            ->bulkActions([]);
    }

    public static function infolist(Infolist $infolist): Infolist
    {
        return $infolist
            ->schema([
                Components\Section::make()
                    ->schema([
                        Components\Split::make([
                            Components\Grid::make(3)
                                ->schema([
                                    Components\Group::make([
                                        Components\TextEntry::make('donation_name')->label('الاسم')->color('primary'),
                                        Components\TextEntry::make('quantity_type')->label(' نوع الكمية')->color('primary'),
                                    ]),
                                    Components\Group::make([
                                        Components\TextEntry::make('created_at')->label('تاريخ النشر')->since()->color('primary'),
                                        Components\TextEntry::make('quantity')->label('الكمية')->color('primary'),
                                    ]),
                                    Components\Group::make([
                                        Components\TextEntry::make('expiration_date')->label('تاريخ الانتهاء')->since()->color('primary'),
                                        Components\TextEntry::make('status')->label('الحالة')->badge()
                                            ->color(fn (string $state): string => match ($state) {
                                                'مُدرج' => 'success',
                                                'تم التبرع' => 'info',
                                                'تم التسليم' => 'gray',
                                            }),
                                    ]),
                                ]),
                            Components\ImageEntry::make('image_url')
                                ->hiddenLabel()
                                ->grow(false),
                        ])->from('lg'),
                    ]),
                Components\Section::make('الوصف')
                    ->schema([
                        Components\TextEntry::make('description')->label('الوصف')->html()
                            ->prose()
                            ->markdown()
                            ->hiddenLabel(),
                    ])
                    ->collapsible(),
            ]);
    }
    public static function getRecordSubNavigation(Page $page): array
    {
        return $page->generateNavigationItems([
            Pages\ViewDonation::class,
            Pages\EditDonation::class,
            Pages\ManageDonationRequests::class,
        ]);
    }


    public static function getPages(): array
    {
        return [
            'index' => Pages\ListDonations::route('/'),
            'create' => Pages\CreateDonation::route('/create'),
            'view' => Pages\ViewDonation::route('/{record}'),
            'edit' => Pages\EditDonation::route('/{record}/edit'),
            'requests' => Pages\ManageDonationRequests::route('/{record}/requests'),
        ];
    }

    public static function getNavigationBadge(): ?string
    {
        return static::$model::count();
    }
    
}
