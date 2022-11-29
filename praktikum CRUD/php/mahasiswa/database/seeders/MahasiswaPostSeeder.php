<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MahasiswaPostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mahasiswa_posts')->insert([
            'nim' => 'G.211.20.0077',
            'nama' => 'Rinaldo Dwi Fataurahman',
            'umur' => '21',
            'alamat' => 'Banyumanik',
            'kota' => 'Semarang',
            'kelas' => 'B1',
            'Jurusan' => 'Teknik Informatika',
        ]);
    }
}
