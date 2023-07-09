<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ImportAlternatifTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('import_alternatif')->delete();
        
        \DB::table('import_alternatif')->insert(array (
            0 => 
            array (
                'id' => 22,
                'nama' => 'Data Testing',
                'slug' => 'data-testing',
                'file' => '20230710014917-data-testing.xlsx',
                'count' => 25,
                'created_at' => '2023-07-10 01:49:17',
                'updated_at' => '2023-07-10 01:49:18',
            ),
        ));
        
        
    }
}