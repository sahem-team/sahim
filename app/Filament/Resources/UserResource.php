<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserResource\Pages;
use App\Filament\Resources\UserResource\RelationManagers;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Infolist;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Infolists\Components\Section;


class UserResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $navigationLabel = 'المستخدمين';
    protected static ?string $modelLabel = 'مستخدم ';
    protected static ?int $navigationSort = 1;
    protected static ?string $navigationIcon = 'heroicon-s-user-group';
    protected static ?string $navigationGroup = 'الإدارة';

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
                        // TextEntry::make('type')->color('primary')->label('النوع')
                        //     ->state(function (Donor $record): string {
                        //         if ($record->type == 'store') {
                        //             return 'متجر';
                        //         }
                        //         return 'مطعم';
                        //     }),
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
                Tables\Columns\TextColumn::make('name')->label('الاسم'),
                Tables\Columns\TextColumn::make('email')->label('البريد الالكتروني'),
                Tables\Columns\TextColumn::make('created_at')->since()->label('تاريخ التسجيل'),

                Tables\Columns\TextColumn::make('role')->label('نوع الحساب')
                    ->state(function ($record): string {
                        switch ($record->role) {
                            case 'donor':
                                return 'متبرع';
                            case 'charity':
                                return 'جهة خيرية';
                            default:
                                return 'مشرف ';
                        }
                    }),
                Tables\Columns\TextColumn::make('donor.name')->label('الحساب')->state(function ($record): string {
                    switch ($record->role) {
                        case 'donor':
                            return $record->donor->name;
                        case 'charity':
                            return $record->charity->name;
                        default:
                            return 'مشرف ';
                    }
                }),

            ])
            ->filters([
                //
            ])
            ->actions([
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->recordUrl(null)
            ;
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
            'index' => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUser::route('/create'),
            'view' => Pages\ViewUser::route('/{record}'),
            'edit' => Pages\EditUser::route('/{record}/edit'),
        ];
    }
}
