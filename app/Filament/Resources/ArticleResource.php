<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ArticleResource\Pages;
use App\Models\Article;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class ArticleResource extends Resource
{
    protected static ?string $model = Article::class;

    protected static ?string $navigationIcon = 'heroicon-o-clipboard-document-list';
    protected static ?string $navigationLabel = 'مقالات';
    protected static ?string $modelLabel = 'مقال ';
    protected static ?int $navigationSort = 2;
    protected static ?string $navigationGroup = 'الإدارة';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')->label('عنوان المقال')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Textarea::make('description')->label('وصف المقال'),
                Forms\Components\FileUpload::make('image')->directory('articles_images')->preserveFilenames()->image()->label('صورة المقال')
                    ->imageEditor()->imageEditorAspectRatios(
                        [
                            '16:9',
                            '4:3',
                            '1:1',
                        ]
                    ),
                Forms\Components\RichEditor::make('body')
                    ->required()
                    ->label('نص المقال')
                    ->maxLength(65535)
                    ->fileAttachmentsDirectory('article_body_images')
                    ->columnSpanFull(),

            ])->columns(1);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image')->label('صورة المقال')->width(80),
                Tables\Columns\TextColumn::make('title')->label('عنوان المقال')->limit(80)
                    ->searchable(),

                Tables\Columns\TextColumn::make('created_at')->label('تاريخ النشر')->since(),

            ])
            ->filters([
                //
            ])
            ->actions([
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
            'index' => Pages\ListArticles::route('/'),
            'create' => Pages\CreateArticle::route('/create'),
            'edit' => Pages\EditArticle::route('/{record}/edit'),
        ];
    }
}
