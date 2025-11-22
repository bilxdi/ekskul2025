<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EkstrakurikulerResource\Pages;
use App\Models\Ekstrakurikuler;
use BackedEnum;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\BulkActionGroup;
use Filament\Forms\Components\FileUpload; // Untuk Upload Gambar
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Resources\Resource;
use Filament\Schemas\Schema; // <--- INI KUNCINYA (Versi 4 pakai Schema)
use Filament\Tables\Columns\ImageColumn; // Untuk Lihat Gambar
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class EkstrakurikulerResource extends Resource
{
    protected static ?string $model = Ekstrakurikuler::class;

    // Tipe data ditulis lengkap agar tidak error FatalError
    protected static string | BackedEnum | null $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationLabel = 'Data Ekskul';

    // Perhatikan: Parameter menggunakan Schema, bukan Form
    public static function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nama_kegiatan')
                    ->label('Nama Ekskul')
                    ->required(),

                TextInput::make('pembina')
                    ->label('Nama Pembina')
                    ->required(),

                TextInput::make('jadwal')
                    ->placeholder('Contoh: Senin, 16.00')
                    ->required(),

                TextInput::make('lokasi')
                    ->required(),

                TextInput::make('kuota')
                    ->numeric()
                    ->required(),

                // Bagian Upload Gambar
                FileUpload::make('gambar')
                    ->label('Foto Kegiatan')
                    ->disk('public')
                    ->directory('ekskul')
                    ->visibility('public')
                    ->columnSpanFull(),

                Textarea::make('deskripsi')
                    ->required()
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                // Menampilkan Gambar Bulat
                ImageColumn::make('gambar')
                    ->disk('public')
                    ->circular(),

                TextColumn::make('nama_kegiatan')
                    ->searchable()
                    ->sortable()
                    ->weight('bold'),

                TextColumn::make('pembina')
                    ->searchable(),

                TextColumn::make('jadwal'),

                TextColumn::make('kuota')
                    ->badge()
                    ->color('info'),
            ])
            ->filters([
                //
            ])
            ->actions([
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
            'index' => Pages\ManageEkstrakurikulers::route('/'),
        ];
    }
}
