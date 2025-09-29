<?php

namespace App\Filament\Resources\CategoryResource\RelationManagers;

use Filament\Schemas\Schema;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Group;
use Filament\Actions\CreateAction;
use Filament\Actions\EditAction;
use Filament\Actions\DeleteAction;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Forms;
use Filament\Tables;
use App\Models\Category;
use Filament\Tables\Table;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ColorColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Filters\SelectFilter;
use Illuminate\Database\Eloquent\Builder;
use Filament\Forms\Components\ColorPicker;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Resources\RelationManagers\RelationManager;

class PostsRelationManager extends RelationManager
{
    protected static string $relationship = 'posts';

    public function form(Schema $schema): Schema
    {
        return $schema
        ->components([
            Section::make('Basic Information')->description('Basic information of the post')
            ->collapsible()->schema([
                TextInput::make('title')
                    ->unique(ignoreRecord: true)
                    ->required()
                    ->maxLength(255),
                TextInput::make('slug')
                    ->required()
                    ->unique(ignoreRecord: true)
                    ->maxLength(255),
                // Select::make('category_id')
                //     ->relationship('category', 'name')
                //     ->label('Category')
                //     ->required(),
                TagsInput::make('tags')
                    ->required()
                    ->suggestions(Category::all()->pluck('name')),
            ])->columns(3),
            // Group::make([
            //     TextInput::make('title')
            //         ->required()
            //         ->maxLength(255),
            //     TextInput::make('slug')
            //         ->required()
            //         ->maxLength(255),
            // ]),
            Section::make('Content & Image')
            ->description('Content and image of the post')
            ->collapsible()->schema([
                RichEditor::make('content')
                    ->required(),
                FileUpload::make('image')
                    ->image()->required()
                    ->nullable()
                    ->maxSize(2048) // 2MB
                    ->acceptedFileTypes(['image/*'])
                    // ->multiple()
                    // ->maxFiles(1)
                    ->default('https://placehold.co/600x400')
                    ->disk('public')
                    ->directory('posts'),
                    Group::make([
                        Toggle::make('published')
                            ->required()->default(true),
                    ])->columns(1),
            ]),
        ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('title')
            ->columns([
                TextColumn::make('id')
                    ->label('#ID')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('title')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('slug')
                    ->sortable()
                    ->searchable(),
                ImageColumn::make('image')
                    ->default('https://placehold.co/600x400')
                    ->width(60)
                    ->height(60),
                IconColumn::make('published')
                    ->boolean(),
                ToggleColumn::make('published'),
                TextColumn::make('category.name')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                SelectFilter::make('category_id')
                    ->relationship('category', 'name'),
            ])
            ->headerActions([
                CreateAction::make(),
            ])
            ->recordActions([
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
