<?php

namespace App\Filament\Resources;

use App\Enums\ServiceIconEnum;
use App\Filament\Resources\ServiceResource\Pages;
use App\Models\Service;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\Placeholder;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\ViewAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class ServiceResource extends Resource
{
    protected static ?string $model = Service::class;

    protected static ?string $slug = 'services';


    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = "Pages";

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')
                    ->required(),
                Select::make('icon')
                    ->label('Select an Icon')
                    ->options(ServiceIconEnum::class)
                    ->enum(ServiceIconEnum::class)
                    ->native(false)
                    ->required(),
                Textarea::make('presentation_text')
                    ->rows(3)
                    ->required(),
                Textarea::make('description')
                    ->rows(3)
                    ->required(),



                MarkdownEditor::make('content')
                    ->required()
                    ->columnSpanFull(),

                Placeholder::make('created_at')
                    ->label('Created Date')
                    ->content(fn(?Service $record): string => $record?->created_at?->diffForHumans() ?? '-')
                    ->hiddenOn('create'),

                Placeholder::make('updated_at')
                    ->label('Last Modified Date')
                    ->content(fn(?Service $record): string => $record?->updated_at?->diffForHumans() ?? '-')
                    ->hiddenOn('create'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('description')->limit(30),
                IconColumn::make('icon')
                    ->icon(fn (string $state)=>ServiceIconEnum::from($state)->getIcon()),
            ])
            ->filters([
                //
            ])
            ->actions([
                ViewAction::make(),
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->bulkActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListServices::route('/'),
            'create' => Pages\CreateService::route('/create'),
            'edit' => Pages\EditService::route('/{record}/edit'),
        ];
    }

    public static function getGloballySearchableAttributes(): array
    {
        return ['title'];
    }
}
