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
        $data = [

            [
                'slug' => 'abu-di-atas-tanggul',
                'peribahasa' => 'abu di atas tanggul',
                'arti' => 'tidak tetap kedudukannya (Sewaktu-waktu dapat dipecat dan sebagainya).',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'slug' => 'ada-air-ada-ikan',
                'peribahasa' => 'ada air, ada ikan',
                'arti' => 'di mana pun kita tinggal, rezeki akan selalu ada.',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'slug' => 'ada-padang-ada-belalang',
                'peribahasa' => 'ada padang, ada belalang',
                'arti' => 'di mana pun kita tinggal, rezeki akan selalu ada (akan mendapatkan).',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'slug' => 'ada-angin-ada-pohonnya',
                'peribahasa' => 'ada angin, ada pohonnya',
                'arti' => 'segala sesuatu ada asal mulanya (sebab-sebabnya).',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'slug' => 'hujan-berpohon-panas-berasal',
                'peribahasa' => 'hujan berpohon, panas berasal',
                'arti' => 'segala sesuatu ada asal mulanya (sebab-sebabnya).',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'slug' => 'ada-bangkai-ada-hering',
                'peribahasa' => 'ada bangkai, ada hering',
                'arti' => 'jika ada perempuang lacur, banyak laki-laki yang datang.',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'slug' => 'ada-batang-cendawan-tumbuh',
                'peribahasa' => 'ada batang, cendawan tumbuh',
                'arti' => 'di mana kita berada di situ ada rezeki.',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'slug' => 'ada-beras-taruh-dalam-padi',
                'peribahasa' => 'ada beras, taruh dalam padi',
                'arti' => 'rahasia hendaklah disimpan baik-baik.',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'slug' => 'ada-biduk-serempu-pula',
                'peribahasa' => 'ada biduk serempu pula',
                'arti' => 'tidak pernah merasa puas; selalu menginginkan yang lain.',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'slug' => 'ada-gula-ada-semut',
                'peribahasa' => 'ada gula, ada semut',
                'arti' => 'di mana banyak kesenangan di situlah banyak orang datang.',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'slug' => 'ada-hujan-ada-panas-ada-hari-boleh-balas',
                'peribahasa' => 'ada hujan ada panas, ada hari boleh balas',
                'arti' => 'selalu ada kesempatan untuk membalas dendam.',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'slug' => 'ada-nyawa-ada-ikan',
                'peribahasa' => 'ada nyawa, ada ikan',
                'arti' => 'masih hidup, tetapi sudah hampir mati (dalam keadaan hampir mati).',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'slug' => 'ada-nyawa-ada-rezeki',
                'peribahasa' => 'ada nyawa (umur), ada rezeki',
                'arti' => 'selama masih hidup selama itu pula selalu mendapat penghidupan (penghasilan).',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'slug' => 'ada-padi-segala-menjadi',
                'peribahasa' => 'ada padi segala menjadi',
                'arti' => 'orang kaya dapat mencapai apa yang diinginkannya.',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'slug' => 'ada-rotan-ada-duri',
                'peribahasa' => 'ada rotan, ada duri',
                'arti' => 'kesenangan tentu ada kesusahannya.',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'slug' => 'ada-rupa-ada-harga',
                'peribahasa' => 'ada rupa, ada harga',
                'arti' => 'harga barang ditentukan oleh keadaan (kualitas) barang.',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'slug' => 'ada-sampan-hendak-berenang',
                'peribahasa' => 'ada sampan hendak berenang',
                'arti' => 'sengaja berpayah-payah (bersusah-susah) padahal tidak perlu berbuat begitu.',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'slug' => 'ada-uang-ada-barang',
                'peribahasa' => 'ada uang, ada barang',
                'arti' => 'jika sanggup membayar banyak (maka) akan mendapat barang yang lebih banyak.',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'slug' => 'ada-ubi-ada-talas-ada-budi-ada-balas',
                'peribahasa' => 'ada ubi ada talas, ada budi ada balas',
                'arti' => 'kejahatan dibalas dengan kejahatan, kebaikan dibalas dengan kebaikan.',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'slug' => 'ada-udang-di-balik-batu',
                'peribahasa' => 'ada udang di balik batu',
                'arti' => 'ada suatu maksud yang tersembunyi.',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'slug' => 'adakah-buaya-menolak-bangkai',
                'peribahasa' => 'adakah buaya menolak bangkai',
                'arti' => 'orang jahat akan berbuat jahat kalau ada kesempatan.',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'slug' => 'adapun-manikam-itu-jika-dijatuhkan-ke-dalam-limbahan-sekalipun-niscaya-tidak-akan-hilang-cahayanya',
                'peribahasa' => 'adapun manikam (batu permata) itu jika dijatuhkan ke dalam limbahan sekalipun, niscaya tidak akan hilang cahayanya',
                'arti' => 'orang yang asalnya baik jika ia miskin ataupun menjadi suruh-suruhan orang, tabiatnya, kelakuannya, dan budi bahasanya tetap baik.',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'slug' => 'adat-dagang-tahan-tawar',
                'peribahasa' => 'adat dagang tahan tawar',
                'arti' => 'sudah biasa bahwa barang dagangan boleh ditawar.',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'slug' => 'adat-diisi-janji-dilabuh',
                'peribahasa' => 'adat diisih janji dilabuh',
                'arti' => 'adat harus dijalankan, persetujuan harus ditepati.',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'slug' => 'adat-diisi-lembaga-dituang',
                'peribahasa' => 'adat diisi, lembaga dituang',
                'arti' => 'melakukan sesuatu menurut adat kebiasaan.',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'slug' => 'adat-hidup-tolong-menolong-syariat-palu-memalu',
                'peribahasa' => 'adat hidup tolong-menolong, syariat palu memalu',
                'arti' => 'dalam kehidupan sehari-hari harus saling menolong, dalam agama saling membantu.',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'slug' => 'adat-pasang-berturun-naik',
                'peribahasa' => 'adat pasang berturuN naik',
                'arti' => 'keadaan yang selalu berubah-ubah, terutama tentang kekayaan atau kedudukan seseorang.',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'slug' => 'adat-periuk-berkerak-adat-lesung-berdekak',
                'peribahasa' => 'adat periuk berkerak, adat lesung berdekak',
                'arti' => 'jika ingin mendapat keuntungan dalam suatu pekerjaan, hendaklah seseorang dapat menanggung kesusahan.',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'slug' => 'adat-sepanjang-jalan-cupak-sepanjang-betung',
                'peribahasa' => 'adat sepanjang jalan, cupak sepanjang betung',
                'arti' => 'segala sesuatu ada tata caranya.',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'slug' => 'adat-teluk-timbunan-kapal',
                'peribahasa' => 'adat teluk timbunan kapal',
                'arti' => 'perihal orang berkuasa, berpengaruh, dan sebagainya yang menjadi tempat orang meminta pertolongan, menyelesaikan perkara, dan sebagainya.',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'slug' => 'agih-agih-kungkang',
                'peribahasa' => 'agih-agih kungkang',
                'arti' => 'terlampau murah hati sehingga menderita kesusahan.',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'slug' => 'air-beriak-tanda-tak-dalam',
                'peribahasa' => 'air beriak tanda tak dalam',
                'arti' => 'orang yang banyak cakap atau sombing, biasanya kurang ilmunya.',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'slug' => 'air-besar-batu-bersibak',
                'peribahasa' => 'air besar batu bersibak (retak)',
                'arti' => 'persaudaraan atau keluarga menjadi cerai-berai jika ada perselisihan.',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'slug' => 'air-cucuran-atap-jatuh-ke-pelimbahan-juga',
                'peribahasa' => 'air cucuran atap jatuh ke pelimbahan juga',
                'arti' => 'biasanya sifat anak menurut teladan orangtuanya.',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'slug' => 'air-di-daun-keladi',
                'peribahasa' => 'air di daun keladi',
                'arti' => 'sukar (tidak bisa) diajar atau dinasehati.',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'slug' => 'air-dicencang-tiada-putus',
                'peribahasa' => 'air dicencang tiada putus',
                'arti' => 'persaudaraan tidak akan putus hanya karena perselisihan kecil.',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'slug' => 'air-diminum-rasa-duri-nasi-dimakan-rasa-sekam',
                'peribahasa' => 'air diminum rasa duri, nasi dimakan rasa sekam',
                'arti' => 'tidak enak makan dan minum karena (saat) menghadapi suatu malapetaka atau kendala.',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'slug' => 'air-jernih-ikannya-jinak',
                'peribahasa' => 'air jernih ikannya jinak',
                'arti' => 'negeri yang serba teratur dengan penduduknya yang serba baik, baik pula budi bahasanya.',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ];

        Peribahasa::truncate();
        Peribahasa::insert($data);
        // foreach ($data as $key => $value) {
        //     Peribahasa::firstOrCreate($data[$key]);
        // }
    }
}
