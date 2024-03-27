<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Berita;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Berita::create([
            'judul' => 'PPDB',
            'isi' => 'PPDB telah berakhir'
        ]);

        Berita::create([
            'judul' => 'Pembagian Kelas',
            'isi' => 'Pembagian kelas akan dilaksanakan besok'
        ]);
    }
}
