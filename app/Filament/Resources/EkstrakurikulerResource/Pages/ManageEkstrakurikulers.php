<?php

namespace App\Filament\Resources\EkstrakurikulerResource\Pages;

use App\Filament\Resources\EkstrakurikulerResource;
use Filament\Actions; // <--- Pastikan ini ada
use Filament\Resources\Pages\ManageRecords;

class ManageEkstrakurikulers extends ManageRecords
{
    protected static string $resource = EkstrakurikulerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            // INI ADALAH TOMBOL BUAT INPUT DATA
            Actions\CreateAction::make()
                ->label('Tambah Ekskul Baru') // Ganti label biar jelas
                ->icon('heroicon-o-plus'),
        ];
    }
}
