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
        Peribahasa::insert(
            [
                'slug' => 'abu-di-atas-tanggul',
                'peribahasa' => 'abu di atas tanggul',
                'arti' => 'tidak tetap kedudukannya (Sewaktu-waktu dapat dipecat dan sebagainya).'
            ],
            [
                'slug' => 'ada-air-ada-ikan',
                'peribahasa' => 'ada air, ada ikan',
                'arti' => 'di mana pun kita tinggal, rezeki akan selalu ada.'
            ],
            [
                'slug' => 'ada-padang-ada-belalang',
                'peribahasa' => 'ada padang, ada belalang',
                'arti' => 'di mana pun kita tinggal, rezeki akan selalu ada (akan mendapatkan).'
            ],
            [
                'slug' => 'ada-angin-ada-pohonnya',
                'peribahasa' => 'ada angin, ada pohonnya',
                'arti' => 'segala sesuatu ada asal mulanya (sebab-sebabnya).'
            ],
            [
                'slug' => 'hujan-berpohon-panas-berasal',
                'peribahasa' => 'hujan berpohon, panas berasal',
                'arti' => 'segala sesuatu ada asal mulanya (sebab-sebabnya).'
            ],
            [
                'slug' => 'ada-bangkai-ada-hering',
                'peribahasa' => 'ada bangkai, ada hering',
                'arti' => 'jika ada perempuang lacur, banyak laki-laki yang datang.'
            ],
            [
                'slug' => 'ada-batang-cendawan-tumbuh',
                'peribahasa' => 'ada batang, cendawan tumbuh',
                'arti' => 'di mana kita berada di situ ada rezeki.'
            ],
            [
                'slug' => 'ada-beras-taruh-dalam-padi',
                'peribahasa' => 'ada beras, taruh dalam padi',
                'arti' => 'rahasia hendaklah disimpan baik-baik.'
            ],
            [
                'slug' => 'ada-biduk-serempu-pula',
                'peribahasa' => 'ada biduk serempu pula',
                'arti' => 'tidak pernah merasa puas; selalu menginginkan yang lain.'
            ],
            [
                'slug' => 'ada-gula-ada-semut',
                'peribahasa' => 'ada gula, ada semut',
                'arti' => 'di mana banyak kesenangan di situlah banyak orang datang.'
            ],
        );
    }
}
