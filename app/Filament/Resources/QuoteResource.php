<?php

namespace App\Filament\Resources;

use App\Filament\Resources\QuoteResource\Pages;
use App\Models\Quote;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Placeholder;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\Filter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;

class QuoteResource extends Resource
{
    protected static ?string $model = Quote::class;

    protected static ?string $slug = 'messages';

    protected static ?string $navigationGroup = 'Messages';
    protected static ?string $navigationLabel = "Quotes";
    protected static ?string $navigationBadgeTooltip = "les devis enregister par les client";
    protected static ?string $navigationIcon = 'heroicon-o-chat-bubble-oval-left-ellipsis';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->required(),

                TextInput::make('email')
                    ->required(),

                Textarea::make('message')
                    ->columnSpanFull()
                    ->required(),

                Placeholder::make('created_at')
                    ->label("Date d'envoie")
                    ->visibleOn(['view'])
                    ->content(fn(?Quote $record): string => $record?->created_at?->diffForHumans() ?? '-'),


            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('email')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('message')
                    ->limit(30),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->label('Envoye le')
            ])
            ->filters([
                Filter::make('name')->name('name')
                ->form([
                    TextInput::make('name_filter')->label("Nom")
                ])
                    ->query(function (Builder $query, array $data): Builder {
                        return $query
                            ->when(
                                $data['name_filter'],
                                fn(Builder $query, $email): Builder => $query->where('name', 'like', "%$email%"),
                            );
                    }),
                Filter::make('email')->name('email')->label("Value")
                    ->form([
                        TextInput::make('email_filter')->label("Email")
                    ])->query(function (Builder $query, array $data): Builder {
                        return $query
                            ->when(
                                $data['email_filter'],
                                fn(Builder $query, $email): Builder => $query->where('email', 'like', "%$email%"),
                            );
                        }),
                Filter::make('created_at')
                    ->name("Date d'envoie")
                    ->form([
                        DatePicker::make('started_at')->label("Date debut envoie"),
                        DatePicker::make('end_at')->label("Date fin envoie"),
                    ])
                    ->query(function (Builder $query, array $data): Builder {
                        return $query
                            ->when(
                                $data['started_at'],
                                fn (Builder $query, $date): Builder => $query->whereDate('created_at', '>=', $date),
                            )
                            ->when(
                                $data['end_at'],
                                fn (Builder $query, $date): Builder => $query->whereDate('created_at', '<=', $date),
                            );
                    })
            ])
            ->actions([
                ViewAction::make(),
                //EditAction::make(),
                DeleteAction::make(),
            ])
            ->bulkActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ])
            ->defaultSort('created_at','asc');
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListQuotes::route('/'),
            //'create' => Pages\CreateQuote::route('/create'),
            //'edit' => Pages\EditQuote::route('/{record}/edit'),
        ];
    }

    public static function getGloballySearchableAttributes(): array
    {
        return ['name', 'email'];
    }
}
