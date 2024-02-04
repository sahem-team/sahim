<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MessageResource\Pages;
use App\Models\Message;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Infolist;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class MessageResource extends Resource
{
    protected static ?string $model = Message::class;

    protected static ?string $navigationLabel = 'الرسائل';
    protected static ?string $modelLabel = 'رسالة ';
    protected static ?int $navigationSort = 3;
    protected static ?string $navigationIcon = 'heroicon-s-envelope-open';
    protected static ?string $navigationGroup = 'الإدارة';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('user_id')
                    ->numeric(),
                Forms\Components\Toggle::make('is_user')
                    ->required(),
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('email')
                    ->email()
                    ->required()
                    ->maxLength(255),
                Forms\Components\Textarea::make('message')
                    ->required()
                    ->maxLength(65535)
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable()->label('الاسم'),
                Tables\Columns\TextColumn::make('email')
                    ->searchable()->label('البريد الإلكتروني')->copyable()
                    ->copyMessage('تم نسخ البريد الإلكتروني'),
                Tables\Columns\TextColumn::make('message')->label('الرسالة')->limit(30),
                Tables\Columns\TextColumn::make('created_at')->label('تاريخ الإرسال')
                    ->since(),
                Tables\Columns\IconColumn::make('is_user')->label('مستخدم ؟')
                    ->boolean(),
                Tables\Columns\TextColumn::make('user_id')->label('إسم الحساب')->state(function (Message $record): string {
                    if ($record->user_id == null) {
                        return 'لا يملك حساب';
                    }
                    if ($record->user->role == 'donor') {

                        return $record->user->donor->name;
                    } elseif ($record->user->role == 'charity') {

                        return $record->user->charity->name;
                    }
                }),
            ])
            ->filters([
                //#
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),

            ])
            ->recordAction(Tables\Actions\ViewAction::class)
            ->recordUrl(null)
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function infolist(Infolist $infolist): Infolist
    {
        return $infolist
            ->schema([
                TextEntry::make('name')->label('الاسم')->color('primary'),
                TextEntry::make('email')->color('primary')->label('البريد الإلكتروني')->copyable()->copyMessage('تم نسخ البريد الإلكتروني'),
                TextEntry::make('user_id')->label('حساب المرسل')->state(function (Message $record): string {
                    if ($record->user_id == null) {
                        return 'لا يملك حساب';
                    }
                    if ($record->user->role == 'donor') {

                        return $record->user->donor->name;
                    } elseif ($record->user->role == 'charity') {

                        return $record->user->charity->name;
                    }
                })->color('primary'),
                TextEntry::make('created_at')->label('تاريخ الإرسال')
                    ->since()->color('primary'),
                TextEntry::make('message')->label('الرسالة')->color('primary')->columnSpan(2),
            ])->columns(2);
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
            'index' => Pages\ListMessages::route('/'),
            'create' => Pages\CreateMessage::route('/create'),
            'edit' => Pages\EditMessage::route('/{record}/edit'),
        ];
    }
    public static function getNavigationBadge(): ?string
    {
        return static::$model::count();
    }
}
