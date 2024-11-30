<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Set;
use App\Models\Medicine;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use Filament\Resources\Resource;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Section;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Filters\SelectFilter;
use Illuminate\Database\Eloquent\Builder;
use Filament\Forms\Components\MarkdownEditor;
use App\Filament\Resources\MedicineResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\MedicineResource\RelationManagers;

class MedicineResource extends Resource
{
    protected static ?string $model = Medicine::class;
    protected static ?string $navigationLabel = 'Medicine';
    protected static ?int $navigationSort = 4;
    protected static ?string $navigationGroup = 'Manajemen Alat & Obat';
    protected static ?string $navigationIcon = 'heroicon-o-eye-dropper';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Medicine Information')->schema([
                    Grid::make(2)->schema([
                        TextInput::make('nama')
                            ->required()
                            ->maxLength(255)
                            ->live(onBlur: true) // Jalankan saat 'name' kehilangan fokus
                            ->afterStateUpdated(function ($state, Set $set) {
                                // Slug otomatis terisi berdasarkan 'name'
                                $set('slug', Str::slug($state));
                            }),
                        TextInput::make('slug')
                            ->required()
                            ->maxLength(255)
                            ->disabled()
                            ->dehydrated(true) // Pastikan nilai slug tetap diikutkan dalam request
                            ->unique('medicines', 'slug', ignoreRecord: true), // Unique slug
                    ]),
                    Grid::make(2)->schema([
                        TextInput::make('stok')
                            ->required()
                            ->numeric()
                            ->minValue(0)
                            ->maxLength(255)
                            ->live(onBlur: true),
                        Select::make('kategori_id')
                            ->required()
                            ->searchable()
                            ->preload()
                            ->relationship('kategori', 'nama_kategori'),
                    ]),
                    MarkdownEditor::make('deskripsi')
                        ->columnSpanFull()
                        ->fileAttachmentsDirectory('medicine'),
                ]),
                Section::make('images')->schema([
                    FileUpload::make('images')
                        ->required()
                        ->multiple()
                        ->openable()
                        ->downloadable()
                        ->previewable()
                        ->panelLayout('grid')
                        ->directory('medicine')
                        ->maxFiles(5)
                        // ->acceptedFileTypes(['audio/mpeg']) // Hanya menerima file MP3
                        // ->directory('uploads/audio')
                        ->reorderable(),
                ]),
            ]);
    }


    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama')
                    ->label('Nama Barang')
                    ->searchable(),

                ImageColumn::make('first_image_url') // Menggunakan accessor
                    ->label('Image')
                    ->circular(),


                // TextColumn::make('images') // Menggunakan accessor
                //     ->label('Audio File')
                //     ->html() // Mengizinkan HTML di dalam kolom
                //     ->formatStateUsing(function ($state) {
                //         if ($state) {
                //             return "<audio controls>
                //                         <source src='" . asset('storage/' . $state) . "' type='audio/mpeg'>
                //                         Your browser does not support the audio element.
                //                     </audio>";
                //         }
                //         return 'No audio available';
                //     }),

                TextColumn::make('kategori.nama_kategori')
                    ->label('Kategori')
                    ->searchable()
                    ->searchable(),

                TextColumn::make('stok')
                    ->sortable()
                    ->searchable(),

                TextColumn::make('created_at')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),

                TextColumn::make('updated_at')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                SelectFilter::make('kategori')
                    ->relationship('kategori', 'nama_kategori'),
            ])
            ->actions([

                Tables\Actions\ViewAction::make(),
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
            'index' => Pages\ListMedicines::route('/'),
            'create' => Pages\CreateMedicine::route('/create'),
            'edit' => Pages\EditMedicine::route('/{record}/edit'),
        ];
    }
}