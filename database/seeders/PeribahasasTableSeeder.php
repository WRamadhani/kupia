<?php

namespace Database\Seeders;

use App\Models\Peribahasa;
use Illuminate\Database\Seeder;

class PeribahasasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Peribahasa::insert([
            'slug' => 'abu-di-atas-tanggul',
            'peribahasa' => 'abu di atas tanggul',
            'arti' => 'Tidak tetap kedudukannya (Sewaktu-waktu dapat dipecat dan sebagainya)'
        ]);
    }
}
