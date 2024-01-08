<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CharityResource\Pages;
use App\Filament\Resources\CharityResource\RelationManagers;
use App\Models\Charity;
use Filament\Forms;
use Filament\Infolists\Components\Section;
use Filament\Forms\Form;
use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Infolist;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Table;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CharityResource extends Resource
{
    protected static ?string $model = Charity::class;

    protected static ?string $navigationLabel = 'الجهات الخيرية';
    protected static ?string $modelLabel = 'جهة خيرية ';
    protected static ?int $navigationSort = 3;
    protected static ?string $navigationIcon = 'heroicon-s-users';
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
                Forms\Components\TextInput::make('service_area')->label('الموقع')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('contact_email')->label('البريد الالكتروني')
                    ->email(),
                Forms\Components\TextInput::make('contact_phone')->label('الهاتف')
                    ->tel()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image')->size(40)->label('الصورة'),
                Tables\Columns\TextColumn::make('name')->label('الاسم')->searchable(),
                Tables\Columns\TextColumn::make('service_area')->label('الموقع'),
                Tables\Columns\TextColumn::make('contact_email')->label('البريد الالكتروني'),
                Tables\Columns\TextColumn::make('contact_phone')->label('الهاتف')
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
                        ImageEntry::make('image')->size(300)->label(''),
                    ])->columnSpan(1),
                Section::make()
                    ->schema([
                        TextEntry::make('name')->label('الاسم')->color('primary'),
                        TextEntry::make('service_area')->label('الموقع')->color('primary'),
                        TextEntry::make('contact_email')->label('البريد الالكتروني')->color('primary'),
                        TextEntry::make('contact_phone')->label('الهاتف')->color('primary')
                    ])->columnSpan(2)->columns(2)
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
            'index' => Pages\ListCharities::route('/'),
            'create' => Pages\CreateCharity::route('/create'),
            'view' => Pages\ViewCharity::route('/{record}'),
            'edit' => Pages\EditCharity::route('/{record}/edit'),
        ];
    }
}
