<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JurnalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jurnals')->insert([
            'kelas'=> 'VII',
            'pertemuan'=> '7',
            'materipokok'=> 'VII',
            'kehadiransiswa'=> 'VII',
            'kegiatanpembelajaran'=> 'VII',
            'penilaian'=> 'VII',
            'tanggal'=> '2008-07-06',
        ]);

    }
}
