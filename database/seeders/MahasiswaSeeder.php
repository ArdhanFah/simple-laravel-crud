<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mahasiswas')->insert([
            'nim' => '318',
            'names' => 'siswa',
            'born' => '2022-2-2',
            'majors' => 'Programing',
            'address' => 'jawa timur',
        ]);
        DB::table('mahasiswas')->insert([
            'nim' => '319',
            'names' => 'siswa dua',
            'born' => '2022-10-20',
            'majors' => 'Networking',
            'address' => 'jawa timur',
        ]);
        DB::table('mahasiswas')->insert([
            'nim' => '320',
            'names' => 'siswa tiga',
            'born' => '2021-1-2',
            'majors' => 'Development',
            'address' => 'jawa timur',
        ]);
        DB::table('mahasiswas')->insert([
            'nim' => '321',
            'names' => 'siswa emapat',
            'born' => '2022-1-3',
            'majors' => 'Programing',
            'address' => 'jawa timur',
        ]);
        DB::table('mahasiswas')->insert([
            'nim' => '322',
            'names' => 'siswa lima',
            'born' => '2022-2-2',
            'majors' => 'Networking',
            'address' => 'jawa timur',
        ]);
        DB::table('mahasiswas')->insert([
            'nim' => '323',
            'names' => 'siswa enam',
            'born' => '2019-2-2',
            'majors' => 'Networking',
            'address' => 'jawa timur',
        ]);
    }
}
