<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DonorResource\Pages;
use App\Models\Donor;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Infolist;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Infolists\Components\Section;


class DonorResource extends Resource
{
    protected static ?string $model = Donor::class;

    protected static ?string $navigationLabel = 'المتبرعين';
    protected static ?string $modelLabel = 'متبرع ';
    protected static ?int $navigationSort = 1;
    protected static ?string $navigationIcon = 'heroicon-s-table-cells';
    protected static ?string $navigationGroup = 'الخدمات';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\FileUpload::make('image')->label('الصورة')
                    ->image()->columnSpanFull(),
                Forms\Components\TextInput::make('name')->label('الاسم')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('location')->label('الموقع')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('contact_email')->label('البريد الالكتروني')
                    ->email(),
                Forms\Components\TextInput::make('contact_phone')->label('الهاتف')
                    ->tel()

            ]);
    }

    public static function infolist(Infolist $infolist): Infolist
    {
        return $infolist
            ->columns(3)
            ->schema([
                Section::make()
                    ->schema([
                        ImageEntry::make('image')->size(300)->label(''),
                    ])->columnSpan(1),
                Section::make()
                    ->schema([
                        TextEntry::make('name')->label('الاسم')->color('primary'),
                        TextEntry::make('type')->color('primary')->label('النوع')
                            ->state(function (Donor $record): string {
                                if ($record->type == 'store') {
                                    return 'متجر';
                                }
                                return 'مطعم';
                            }),
                        TextEntry::make('location')->label('الموقع')->color('primary'),
                        TextEntry::make('contact_email')->label('البريد الالكتروني')->color('primary'),
                        TextEntry::make('contact_phone')->label('الهاتف')->color('primary')
                    ])->columnSpan(2)->columns(3)
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image')->size(40)->label('الصورة'),
                Tables\Columns\TextColumn::make('name')->label('الاسم')
                    ->searchable(),
                Tables\Columns\TextColumn::make('type')->label('النوع')
                    ->state(function (Donor $record): string {
                        if ($record->type == 'store') {
                            return 'متجر';
                        }
                        return 'مطعم';
                    }),
                Tables\Columns\TextColumn::make('location')->label('الموقع'),
                Tables\Columns\TextColumn::make('contact_email')->label('البريد الالكتروني'),
                Tables\Columns\TextColumn::make('contact_phone')->label('الهاتف')
            ])
            ->filters([
                //#
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
            'index' => Pages\ListDonors::route('/'),
            'create' => Pages\CreateDonor::route('/create'),
            'view' => Pages\ViewDonor::route('/{record}'),
            'edit' => Pages\EditDonor::route('/{record}/edit'),
        ];
    }
}
