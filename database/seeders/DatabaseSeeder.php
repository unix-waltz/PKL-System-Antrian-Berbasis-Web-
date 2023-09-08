<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\Selesai MengantriithoutModelEvents;
use App\Models\User;
use App\Models\Penguna;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       


        Penguna::create([
            'nama' => "orang1",
            "catatan" => "catatan1-kosong",
            "type" => "A",
            "alamat" => "alamat1",
            "nomor_antrian" => 1,
            "status" => "Dalam Antrian"
        ]);
        Penguna::create([
            'nama' => "orang2",
            "catatan" => "catatan2-kosong",
            "type" => "A",
            "alamat" => "alamat2",
            "nomor_antrian" => 2,
            "status" => "Dalam Antrian"
        ]);
        Penguna::create([
            'nama' => "orang3",
            "catatan" => "catatan3-kosong",
            "type" => "A",
            "alamat" => "alamat3",
            "nomor_antrian" => 3,
            "status" => "Antrian Ditolak"
        ]);
        Penguna::create([
            'nama' => "orang4",
            "catatan" => "catatan4-kosong",
            "type" => "A",
            "alamat" => "alamat4",
            "nomor_antrian" => 4,
            "status" => "Antrian Ditolak"
        ]);
        Penguna::create([
            'nama' => "orang5",
            "catatan" => "catatan5-kosong",
            "type" => "A",
            "alamat" => "alamat5",
            "nomor_antrian" => 5,
            "status" => "Selesai Mengantri"
        ]);
        Penguna::create([
            'nama' => "orang6",
            "catatan" => "catatan6-kosong",
            "type" => "A",
            "alamat" => "alamat6",
            "nomor_antrian" => 6,
            "status" => "Selesai Mengantri"
        ]);
        Penguna::create([
            'nama' => "orang7",
            "catatan" => "catatan7-kosong",
            "type" => "A",
            "alamat" => "alamat7",
            "nomor_antrian" => 7,
            "status" => "Selesai Mengantri"
        ]);
        Penguna::create([
            'nama' => "orang8",
            "catatan" => "catatan8-kosong",
            "type" => "A",
            "alamat" => "alamat8",
            "nomor_antrian" => 8,
            "status" => "Dalam Antrian"
        ]);
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
