<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HomeResource\Pages;
use App\Models\Home;
use Filament\Forms;
use Filament\Forms\Components\Section;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Support\Enums\FontWeight;
use Filament\Tables;
use Filament\Tables\Table;

class HomeResource extends Resource
{
    protected static ?string $model = Home::class;

    protected static ?string $navigationIcon = 'heroicon-o-bookmark-square';
    protected static ?string $navigationLabel = 'الصفحة الرئسية';
    protected static ?string $modelLabel = 'الصفحة ';
    protected static ?int $navigationSort = 3;
    protected static ?string $navigationGroup = 'الإدارة';
    protected static ?string $slug = 'home';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make(' العنوان الرئيسي و الفرعي')
                    ->schema([
                        Forms\Components\TextInput::make('main_title')->required()->label('العنوان الرئيسي'),
                        Forms\Components\TextInput::make('sub_title')->required()->label('العنوان الفرعي'),
                    ])->visible(fn ($record) => $record->page == 'الرئيسية'),
                Section::make(' فقرة دورنا في المجتمع')
                    ->schema([
                        Forms\Components\Textarea::make('our_role')->required()->label('دورنا في المجتمع')->rows(5),

                    ])->visible(fn ($record) => $record->page == 'الرئيسية'),
                Section::make('خطوات عمل المنصة ')
                    ->schema([
                        Forms\Components\TextInput::make('step_1_title')->required()->label('الخطوة الأولى'),
                        Forms\Components\Textarea::make('step_1_description')->required()->label('نص الخطوة الأولى')->rows(4),
                        Forms\Components\TextInput::make('step_2_title')->required()->label('الخطوة الثانية'),
                        Forms\Components\Textarea::make('step_2_description')->required()->label('نص الخطوة الثانية')->rows(4),
                        Forms\Components\TextInput::make('step_3_title')->required()->label('الخطوة الثالثة'),
                        Forms\Components\Textarea::make('step_3_description')->required()->label('نص الخطوة الثالثة')->rows(4),
                        Forms\Components\TextInput::make('step_4_title')->required()->label('الخطوة الرابعة'),
                        Forms\Components\Textarea::make('step_4_description')->required()->label('نص الخطوة الرابعة')->rows(4),
                    ])->columns(2)->visible(fn ($record) => $record->page == 'الرئيسية'),
                Section::make('معلومات المنصة')
                    ->schema([
                        Forms\Components\TextInput::make('contact_us_location')->required()->label('الموقع '),
                        Forms\Components\TextInput::make('contact_us_phone')->required()->label('رقم الهاتف'),
                        Forms\Components\TextInput::make('contact_us_email')->required()->label('البريد الإلكتروني '),
                    ])->columns(3)->visible(fn ($record) => $record->page == 'تواصل معنا'),
                Section::make(' نبذة عنا')
                    ->schema([
                        Forms\Components\Textarea::make('about_us_body')->required()->rows(5)->label('نص الفقرة'),
                    ])->visible(fn ($record) => $record->page == 'من نحن'),
                Section::make('  أسئلة شائعة')
                    ->schema([
                        Forms\Components\TextInput::make('about_Q_1')->required()->label('السؤال الأول '),
                        Forms\Components\Textarea::make('about_A_1')->required()->rows(3)->label('جواب السؤال الأول '),
                        Forms\Components\TextInput::make('about_Q_2')->required()->label('السؤال الثاني '),
                        Forms\Components\Textarea::make('about_A_2')->required()->rows(3)->label('جواب السؤال الثاني '),
                        Forms\Components\TextInput::make('about_Q_3')->required()->label('السؤال الثالث '),
                        Forms\Components\Textarea::make('about_A_3')->required()->rows(3)->label('جواب السؤال الثالث '),
                        Forms\Components\TextInput::make('about_Q_4')->required()->label('السؤال الرابع '),
                        Forms\Components\Textarea::make('about_A_4')->required()->rows(3)->label('جواب السؤال الرابع '),
                        Forms\Components\TextInput::make('about_Q_5')->required()->label('السؤال الخامس '),
                        Forms\Components\Textarea::make('about_A_5')->required()->rows(3)->label('جواب السؤال الخامس '),
                        Forms\Components\TextInput::make('about_Q_6')->required()->label('السؤال السادس '),
                        Forms\Components\Textarea::make('about_A_6')->required()->rows(3)->label('جواب السؤال السادس '),
                        Forms\Components\TextInput::make('about_Q_7')->required()->label('السؤال السابع '),
                        Forms\Components\Textarea::make('about_A_7')->required()->rows(3)->label('جواب السؤال السابع '),
                        Forms\Components\TextInput::make('about_Q_8')->required()->label('السؤال الثامن '),
                        Forms\Components\Textarea::make('about_A_8')->required()->rows(3)->label('جواب السؤال الثامن '),
                        Forms\Components\TextInput::make('about_Q_9')->required()->label('السؤال التاسع '),
                        Forms\Components\Textarea::make('about_A_9')->required()->rows(3)->label('جواب السؤال التاسع '),

                    ])->columns(2)->visible(fn ($record) => $record->page == 'من نحن'),



            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\Layout\Stack::make([
                    Tables\Columns\Layout\Stack::make([
                        Tables\Columns\TextColumn::make('page')
                            ->weight(FontWeight::Bold),
                        Tables\Columns\ImageColumn::make('page_image')
                            ->height('100%')
                            ->width('100%'),
                    ]),
                ])
            ])
            ->filters([
                //#
            ])
            ->contentGrid([
                'md' => 2,
                'xl' => 3,

            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //#
        ];
    }


    public static function getPages(): array
    {
        return [
            'index' => Pages\ListHomes::route('/'),
            'create' => Pages\CreateHome::route('/create'),
            'edit' => Pages\EditHome::route('/{record}/edit'),

        ];
    }
}
