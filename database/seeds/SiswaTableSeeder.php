<?php

use Illuminate\Database\Seeder;
use App\Siswa; // tambahkan kode ini

class SiswaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Siswa::create([
            'nama' => 'jhon',
            'kelas' => '12',
            'nomor_telepon' => '082267539864',
            'alamat' => 'Majalengka'
        ]);
    }
}
