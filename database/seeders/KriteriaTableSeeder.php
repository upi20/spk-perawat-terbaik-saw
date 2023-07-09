<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class KriteriaTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('kriteria')->delete();
        
        \DB::table('kriteria')->insert(array (
            0 => 
            array (
                'id' => 5,
                'bobot' => 30,
                'nama' => 'Komunikasi',
                'slug' => 'komunikasi',
                'kode' => 'C1',
                'created_at' => '2023-07-09 15:00:51',
                'updated_at' => '2023-07-10 01:48:05',
            ),
            1 => 
            array (
                'id' => 6,
                'bobot' => 20,
                'nama' => 'Pelayanan',
                'slug' => 'pelayanan',
                'kode' => 'C2',
                'created_at' => '2023-07-09 15:01:02',
                'updated_at' => '2023-07-10 01:48:12',
            ),
            2 => 
            array (
                'id' => 7,
                'bobot' => 25,
                'nama' => 'Disiplin',
                'slug' => 'disiplin',
                'kode' => 'C3',
                'created_at' => '2023-07-09 15:01:17',
                'updated_at' => '2023-07-10 01:48:21',
            ),
            3 => 
            array (
                'id' => 8,
                'bobot' => 25,
                'nama' => 'Sikap',
                'slug' => 'sikap',
                'kode' => 'C4',
                'created_at' => '2023-07-09 15:01:29',
                'updated_at' => '2023-07-10 01:48:29',
            ),
            4 => 
            array (
                'id' => 9,
                'bobot' => 10,
                'nama' => 'Kemampuan',
                'slug' => 'kemampuan',
                'kode' => 'C5',
                'created_at' => '2023-07-10 01:47:48',
                'updated_at' => '2023-07-10 01:47:48',
            ),
        ));
        
        
    }
}