<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ArticleResource\Pages;
use App\Filament\Resources\ArticleResource\RelationManagers;
use App\Models\Article;
use Filament\Forms\Form;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Textarea;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ArticleResource extends Resource
{
    protected static ?string $model = Article::class;

    protected static ?string $navigationIcon = 'heroicon-o-book-open';

    protected static ?string $navigationLabel = 'Artikel';

    protected static ?string $navigationGroup = 'Artikel';

    protected static ?string $label = 'Artikel';

    protected static ?string $slug = 'article';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')
                    ->label('Judul Artikel')
                    ->placeholder('Masukkan Judul Artikel')
                    ->required(),
                Grid::make(2)
                    ->schema([
                        Select::make('user_id')
                            ->label('Penulis Artikel')
                            ->relationship('user', 'name')
                            ->placeholder('Pilih Penulis Artikel')
                            ->searchable()
                            ->preload()
                            ->native(false)
                            ->required(),
                        Select::make('category_id')
                            ->label('Kategori Artikel')
                            ->relationship('category', 'name')
                            ->placeholder('Pilih Kategori Artikel')
                            ->searchable()
                            ->preload()
                            ->native(false)
                            ->required(),
                    ]),
                Textarea::make('content')
                    ->label('Isi Artikel')
                    ->placeholder('Masukkan Isi Artikel')
                    ->rows(7)
                    ->required(),
                FileUpload::make('image')
                    ->label('Pilih Gambar Header')
                    ->image()
                    ->imageEditor()
                    ->required(),
            ])->columns(1);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')
                    ->searchable()
                    ->label('ID'),
                TextColumn::make('title')
                    ->sortable()
                    ->searchable()
                    ->label('Judul Artikel'),
                ImageColumn::make('image')
                    ->label('Gambar'),
                TextColumn::make('content')
                    ->label('Isi Artikel'),
                TextColumn::make('user.name')
                    ->searchable()
                    ->label('Penulis Artikel'),
                TextColumn::make('category.name')
                    ->label('Kategori Artikel'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
