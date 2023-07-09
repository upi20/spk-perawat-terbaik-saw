<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LogsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('logs')->delete();

        \DB::table('logs')->insert(array(
            0 =>
            array(
                'id' => 1,
                'user_id' => 1,
                'log_date' => '2023-07-10 01:47:48',
                'table_name' => 'kriteria',
                'log_type' => 'create',
                'data' => '{"bobot":"10","nama":"Kemampuan","kode":"C5","slug":"kemampuan","updated_at":"2023-07-09T18:47:48.000000Z","created_at":"2023-07-09T18:47:48.000000Z","id":9}',
            ),
            1 =>
            array(
                'id' => 2,
                'user_id' => 1,
                'log_date' => '2023-07-10 01:48:05',
                'table_name' => 'kriteria',
                'log_type' => 'edit',
                'data' => '{"id":5,"bobot":30,"jenis":"Cost","nama":"Absensi","slug":"absensi","kode":"C1","dari":0,"sampai":100,"created_at":"2023-07-09 15:00:51","updated_at":"2023-07-09 15:06:45"}',
            ),
            2 =>
            array(
                'id' => 3,
                'user_id' => 1,
                'log_date' => '2023-07-10 01:48:12',
                'table_name' => 'kriteria',
                'log_type' => 'edit',
                'data' => '{"id":6,"bobot":20,"jenis":"Benefit","nama":"Nilai Raport","slug":"nilai-raport","kode":"C2","dari":0,"sampai":100,"created_at":"2023-07-09 15:01:02","updated_at":"2023-07-09 15:06:50"}',
            ),
            3 =>
            array(
                'id' => 4,
                'user_id' => 1,
                'log_date' => '2023-07-10 01:48:21',
                'table_name' => 'kriteria',
                'log_type' => 'edit',
                'data' => '{"id":7,"bobot":25,"jenis":"Benefit","nama":"Keaktifan","slug":"keaktifan","kode":"C3","dari":0,"sampai":100,"created_at":"2023-07-09 15:01:17","updated_at":"2023-07-09 15:06:58"}',
            ),
            4 =>
            array(
                'id' => 5,
                'user_id' => 1,
                'log_date' => '2023-07-10 01:48:29',
                'table_name' => 'kriteria',
                'log_type' => 'edit',
                'data' => '{"id":8,"bobot":25,"jenis":"Benefit","nama":"Budi Pekerti","slug":"budi-pekerti","kode":"C4","dari":0,"sampai":100,"created_at":"2023-07-09 15:01:29","updated_at":"2023-07-09 15:07:04"}',
            ),
            5 =>
            array(
                'id' => 6,
                'user_id' => 1,
                'log_date' => '2023-07-10 01:48:41',
                'table_name' => 'import_alternatif',
                'log_type' => 'delete',
                'data' => '{"id":21,"nama":"Data siswa teladan","slug":"data-siswa-teladan","file":"20230709031355-data-siswa-teladan.xlsx","count":25,"created_at":"2023-07-09 15:13:55","updated_at":"2023-07-09 15:13:56"}',
            ),
            6 =>
            array(
                'id' => 7,
                'user_id' => 1,
                'log_date' => '2023-07-10 01:49:17',
                'table_name' => 'import_alternatif',
                'log_type' => 'create',
                'data' => '{"nama":"Data Testing","slug":"data-testing","updated_at":"2023-07-09T18:49:17.000000Z","created_at":"2023-07-09T18:49:17.000000Z","id":22}',
            ),
            7 =>
            array(
                'id' => 8,
                'user_id' => 1,
                'log_date' => '2023-07-10 01:49:17',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nama":"ADE MUNAWAR","import_id":22,"slug":"ade-munawar","updated_at":"2023-07-09T18:49:17.000000Z","created_at":"2023-07-09T18:49:17.000000Z","id":67}',
            ),
            8 =>
            array(
                'id' => 9,
                'user_id' => 1,
                'log_date' => '2023-07-10 01:49:17',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":67,"kriteria_id":5,"nilai":"54","updated_at":"2023-07-09T18:49:17.000000Z","created_at":"2023-07-09T18:49:17.000000Z","id":280}',
            ),
            9 =>
            array(
                'id' => 10,
                'user_id' => 1,
                'log_date' => '2023-07-10 01:49:17',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":67,"kriteria_id":6,"nilai":"8","updated_at":"2023-07-09T18:49:17.000000Z","created_at":"2023-07-09T18:49:17.000000Z","id":281}',
            ),
            10 =>
            array(
                'id' => 11,
                'user_id' => 1,
                'log_date' => '2023-07-10 01:49:17',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":67,"kriteria_id":7,"nilai":"81","updated_at":"2023-07-09T18:49:17.000000Z","created_at":"2023-07-09T18:49:17.000000Z","id":282}',
            ),
            11 =>
            array(
                'id' => 12,
                'user_id' => 1,
                'log_date' => '2023-07-10 01:49:17',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":67,"kriteria_id":8,"nilai":"40","updated_at":"2023-07-09T18:49:17.000000Z","created_at":"2023-07-09T18:49:17.000000Z","id":283}',
            ),
            12 =>
            array(
                'id' => 13,
                'user_id' => 1,
                'log_date' => '2023-07-10 01:49:17',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":67,"kriteria_id":9,"nilai":"43","updated_at":"2023-07-09T18:49:17.000000Z","created_at":"2023-07-09T18:49:17.000000Z","id":284}',
            ),
            13 =>
            array(
                'id' => 14,
                'user_id' => 1,
                'log_date' => '2023-07-10 01:49:17',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nama":"AGUSTIANI SRI RAHAYU","import_id":22,"slug":"agustiani-sri-rahayu","updated_at":"2023-07-09T18:49:17.000000Z","created_at":"2023-07-09T18:49:17.000000Z","id":68}',
            ),
            14 =>
            array(
                'id' => 15,
                'user_id' => 1,
                'log_date' => '2023-07-10 01:49:17',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":68,"kriteria_id":5,"nilai":"37","updated_at":"2023-07-09T18:49:17.000000Z","created_at":"2023-07-09T18:49:17.000000Z","id":285}',
            ),
            15 =>
            array(
                'id' => 16,
                'user_id' => 1,
                'log_date' => '2023-07-10 01:49:17',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":68,"kriteria_id":6,"nilai":"69","updated_at":"2023-07-09T18:49:17.000000Z","created_at":"2023-07-09T18:49:17.000000Z","id":286}',
            ),
            16 =>
            array(
                'id' => 17,
                'user_id' => 1,
                'log_date' => '2023-07-10 01:49:17',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":68,"kriteria_id":7,"nilai":"55","updated_at":"2023-07-09T18:49:17.000000Z","created_at":"2023-07-09T18:49:17.000000Z","id":287}',
            ),
            17 =>
            array(
                'id' => 18,
                'user_id' => 1,
                'log_date' => '2023-07-10 01:49:17',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":68,"kriteria_id":8,"nilai":"46","updated_at":"2023-07-09T18:49:17.000000Z","created_at":"2023-07-09T18:49:17.000000Z","id":288}',
            ),
            18 =>
            array(
                'id' => 19,
                'user_id' => 1,
                'log_date' => '2023-07-10 01:49:17',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":68,"kriteria_id":9,"nilai":"27","updated_at":"2023-07-09T18:49:17.000000Z","created_at":"2023-07-09T18:49:17.000000Z","id":289}',
            ),
            19 =>
            array(
                'id' => 20,
                'user_id' => 1,
                'log_date' => '2023-07-10 01:49:17',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nama":"AJENG KARTINI","import_id":22,"slug":"ajeng-kartini","updated_at":"2023-07-09T18:49:17.000000Z","created_at":"2023-07-09T18:49:17.000000Z","id":69}',
            ),
            20 =>
            array(
                'id' => 21,
                'user_id' => 1,
                'log_date' => '2023-07-10 01:49:17',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":69,"kriteria_id":5,"nilai":"1","updated_at":"2023-07-09T18:49:17.000000Z","created_at":"2023-07-09T18:49:17.000000Z","id":290}',
            ),
            21 =>
            array(
                'id' => 22,
                'user_id' => 1,
                'log_date' => '2023-07-10 01:49:17',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":69,"kriteria_id":6,"nilai":"66","updated_at":"2023-07-09T18:49:17.000000Z","created_at":"2023-07-09T18:49:17.000000Z","id":291}',
            ),
            22 =>
            array(
                'id' => 23,
                'user_id' => 1,
                'log_date' => '2023-07-10 01:49:17',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":69,"kriteria_id":7,"nilai":"43","updated_at":"2023-07-09T18:49:17.000000Z","created_at":"2023-07-09T18:49:17.000000Z","id":292}',
            ),
            23 =>
            array(
                'id' => 24,
                'user_id' => 1,
                'log_date' => '2023-07-10 01:49:17',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":69,"kriteria_id":8,"nilai":"82","updated_at":"2023-07-09T18:49:17.000000Z","created_at":"2023-07-09T18:49:17.000000Z","id":293}',
            ),
            24 =>
            array(
                'id' => 25,
                'user_id' => 1,
                'log_date' => '2023-07-10 01:49:17',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":69,"kriteria_id":9,"nilai":"90","updated_at":"2023-07-09T18:49:17.000000Z","created_at":"2023-07-09T18:49:17.000000Z","id":294}',
            ),
            25 =>
            array(
                'id' => 26,
                'user_id' => 1,
                'log_date' => '2023-07-10 01:49:17',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nama":"ARSILA KHAIRUNNISA","import_id":22,"slug":"arsila-khairunnisa","updated_at":"2023-07-09T18:49:17.000000Z","created_at":"2023-07-09T18:49:17.000000Z","id":70}',
            ),
            26 =>
            array(
                'id' => 27,
                'user_id' => 1,
                'log_date' => '2023-07-10 01:49:17',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":70,"kriteria_id":5,"nilai":"27","updated_at":"2023-07-09T18:49:17.000000Z","created_at":"2023-07-09T18:49:17.000000Z","id":295}',
            ),
            27 =>
            array(
                'id' => 28,
                'user_id' => 1,
                'log_date' => '2023-07-10 01:49:17',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":70,"kriteria_id":6,"nilai":"69","updated_at":"2023-07-09T18:49:17.000000Z","created_at":"2023-07-09T18:49:17.000000Z","id":296}',
            ),
            28 =>
            array(
                'id' => 29,
                'user_id' => 1,
                'log_date' => '2023-07-10 01:49:17',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":70,"kriteria_id":7,"nilai":"27","updated_at":"2023-07-09T18:49:17.000000Z","created_at":"2023-07-09T18:49:17.000000Z","id":297}',
            ),
            29 =>
            array(
                'id' => 30,
                'user_id' => 1,
                'log_date' => '2023-07-10 01:49:17',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":70,"kriteria_id":8,"nilai":"78","updated_at":"2023-07-09T18:49:17.000000Z","created_at":"2023-07-09T18:49:17.000000Z","id":298}',
            ),
            30 =>
            array(
                'id' => 31,
                'user_id' => 1,
                'log_date' => '2023-07-10 01:49:17',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":70,"kriteria_id":9,"nilai":"3","updated_at":"2023-07-09T18:49:17.000000Z","created_at":"2023-07-09T18:49:17.000000Z","id":299}',
            ),
            31 =>
            array(
                'id' => 32,
                'user_id' => 1,
                'log_date' => '2023-07-10 01:49:17',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nama":"DERIS KUSNAEDI","import_id":22,"slug":"deris-kusnaedi","updated_at":"2023-07-09T18:49:17.000000Z","created_at":"2023-07-09T18:49:17.000000Z","id":71}',
            ),
            32 =>
            array(
                'id' => 33,
                'user_id' => 1,
                'log_date' => '2023-07-10 01:49:17',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":71,"kriteria_id":5,"nilai":"64","updated_at":"2023-07-09T18:49:17.000000Z","created_at":"2023-07-09T18:49:17.000000Z","id":300}',
            ),
            33 =>
            array(
                'id' => 34,
                'user_id' => 1,
                'log_date' => '2023-07-10 01:49:17',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":71,"kriteria_id":6,"nilai":"100","updated_at":"2023-07-09T18:49:17.000000Z","created_at":"2023-07-09T18:49:17.000000Z","id":301}',
            ),
            34 =>
            array(
                'id' => 35,
                'user_id' => 1,
                'log_date' => '2023-07-10 01:49:17',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":71,"kriteria_id":7,"nilai":"90","updated_at":"2023-07-09T18:49:17.000000Z","created_at":"2023-07-09T18:49:17.000000Z","id":302}',
            ),
            35 =>
            array(
                'id' => 36,
                'user_id' => 1,
                'log_date' => '2023-07-10 01:49:17',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":71,"kriteria_id":8,"nilai":"5","updated_at":"2023-07-09T18:49:17.000000Z","created_at":"2023-07-09T18:49:17.000000Z","id":303}',
            ),
            36 =>
            array(
                'id' => 37,
                'user_id' => 1,
                'log_date' => '2023-07-10 01:49:17',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":71,"kriteria_id":9,"nilai":"7","updated_at":"2023-07-09T18:49:17.000000Z","created_at":"2023-07-09T18:49:17.000000Z","id":304}',
            ),
            37 =>
            array(
                'id' => 38,
                'user_id' => 1,
                'log_date' => '2023-07-10 01:49:17',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nama":"DEWI","import_id":22,"slug":"dewi","updated_at":"2023-07-09T18:49:17.000000Z","created_at":"2023-07-09T18:49:17.000000Z","id":72}',
            ),
            38 =>
            array(
                'id' => 39,
                'user_id' => 1,
                'log_date' => '2023-07-10 01:49:17',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":72,"kriteria_id":5,"nilai":"8","updated_at":"2023-07-09T18:49:17.000000Z","created_at":"2023-07-09T18:49:17.000000Z","id":305}',
            ),
            39 =>
            array(
                'id' => 40,
                'user_id' => 1,
                'log_date' => '2023-07-10 01:49:17',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":72,"kriteria_id":6,"nilai":"70","updated_at":"2023-07-09T18:49:17.000000Z","created_at":"2023-07-09T18:49:17.000000Z","id":306}',
            ),
            40 =>
            array(
                'id' => 41,
                'user_id' => 1,
                'log_date' => '2023-07-10 01:49:17',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":72,"kriteria_id":7,"nilai":"3","updated_at":"2023-07-09T18:49:17.000000Z","created_at":"2023-07-09T18:49:17.000000Z","id":307}',
            ),
            41 =>
            array(
                'id' => 42,
                'user_id' => 1,
                'log_date' => '2023-07-10 01:49:17',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":72,"kriteria_id":8,"nilai":"89","updated_at":"2023-07-09T18:49:17.000000Z","created_at":"2023-07-09T18:49:17.000000Z","id":308}',
            ),
            42 =>
            array(
                'id' => 43,
                'user_id' => 1,
                'log_date' => '2023-07-10 01:49:17',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":72,"kriteria_id":9,"nilai":"32","updated_at":"2023-07-09T18:49:17.000000Z","created_at":"2023-07-09T18:49:17.000000Z","id":309}',
            ),
            43 =>
            array(
                'id' => 44,
                'user_id' => 1,
                'log_date' => '2023-07-10 01:49:17',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nama":"ENCEP ABDUL HAKIM","import_id":22,"slug":"encep-abdul-hakim","updated_at":"2023-07-09T18:49:17.000000Z","created_at":"2023-07-09T18:49:17.000000Z","id":73}',
            ),
            44 =>
            array(
                'id' => 45,
                'user_id' => 1,
                'log_date' => '2023-07-10 01:49:17',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":73,"kriteria_id":5,"nilai":"74","updated_at":"2023-07-09T18:49:17.000000Z","created_at":"2023-07-09T18:49:17.000000Z","id":310}',
            ),
            45 =>
            array(
                'id' => 46,
                'user_id' => 1,
                'log_date' => '2023-07-10 01:49:17',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":73,"kriteria_id":6,"nilai":"76","updated_at":"2023-07-09T18:49:17.000000Z","created_at":"2023-07-09T18:49:17.000000Z","id":311}',
            ),
            46 =>
            array(
                'id' => 47,
                'user_id' => 1,
                'log_date' => '2023-07-10 01:49:17',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":73,"kriteria_id":7,"nilai":"7","updated_at":"2023-07-09T18:49:17.000000Z","created_at":"2023-07-09T18:49:17.000000Z","id":312}',
            ),
            47 =>
            array(
                'id' => 48,
                'user_id' => 1,
                'log_date' => '2023-07-10 01:49:17',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":73,"kriteria_id":8,"nilai":"44","updated_at":"2023-07-09T18:49:17.000000Z","created_at":"2023-07-09T18:49:17.000000Z","id":313}',
            ),
            48 =>
            array(
                'id' => 49,
                'user_id' => 1,
                'log_date' => '2023-07-10 01:49:17',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":73,"kriteria_id":9,"nilai":"83","updated_at":"2023-07-09T18:49:17.000000Z","created_at":"2023-07-09T18:49:17.000000Z","id":314}',
            ),
            49 =>
            array(
                'id' => 50,
                'user_id' => 1,
                'log_date' => '2023-07-10 01:49:17',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nama":"Faisal Akbar","import_id":22,"slug":"faisal-akbar","updated_at":"2023-07-09T18:49:17.000000Z","created_at":"2023-07-09T18:49:17.000000Z","id":74}',
            ),
            50 =>
            array(
                'id' => 51,
                'user_id' => 1,
                'log_date' => '2023-07-10 01:49:17',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":74,"kriteria_id":5,"nilai":"74","updated_at":"2023-07-09T18:49:17.000000Z","created_at":"2023-07-09T18:49:17.000000Z","id":315}',
            ),
            51 =>
            array(
                'id' => 52,
                'user_id' => 1,
                'log_date' => '2023-07-10 01:49:17',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":74,"kriteria_id":6,"nilai":"93","updated_at":"2023-07-09T18:49:17.000000Z","created_at":"2023-07-09T18:49:17.000000Z","id":316}',
            ),
            52 =>
            array(
                'id' => 53,
                'user_id' => 1,
                'log_date' => '2023-07-10 01:49:17',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":74,"kriteria_id":7,"nilai":"32","updated_at":"2023-07-09T18:49:17.000000Z","created_at":"2023-07-09T18:49:17.000000Z","id":317}',
            ),
            53 =>
            array(
                'id' => 54,
                'user_id' => 1,
                'log_date' => '2023-07-10 01:49:17',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":74,"kriteria_id":8,"nilai":"27","updated_at":"2023-07-09T18:49:17.000000Z","created_at":"2023-07-09T18:49:17.000000Z","id":318}',
            ),
            54 =>
            array(
                'id' => 55,
                'user_id' => 1,
                'log_date' => '2023-07-10 01:49:17',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":74,"kriteria_id":9,"nilai":"22","updated_at":"2023-07-09T18:49:17.000000Z","created_at":"2023-07-09T18:49:17.000000Z","id":319}',
            ),
            55 =>
            array(
                'id' => 56,
                'user_id' => 1,
                'log_date' => '2023-07-10 01:49:17',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nama":"GUSAERI","import_id":22,"slug":"gusaeri","updated_at":"2023-07-09T18:49:17.000000Z","created_at":"2023-07-09T18:49:17.000000Z","id":75}',
            ),
            56 =>
            array(
                'id' => 57,
                'user_id' => 1,
                'log_date' => '2023-07-10 01:49:17',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":75,"kriteria_id":5,"nilai":"75","updated_at":"2023-07-09T18:49:17.000000Z","created_at":"2023-07-09T18:49:17.000000Z","id":320}',
            ),
            57 =>
            array(
                'id' => 58,
                'user_id' => 1,
                'log_date' => '2023-07-10 01:49:17',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":75,"kriteria_id":6,"nilai":"44","updated_at":"2023-07-09T18:49:17.000000Z","created_at":"2023-07-09T18:49:17.000000Z","id":321}',
            ),
            58 =>
            array(
                'id' => 59,
                'user_id' => 1,
                'log_date' => '2023-07-10 01:49:17',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":75,"kriteria_id":7,"nilai":"83","updated_at":"2023-07-09T18:49:17.000000Z","created_at":"2023-07-09T18:49:17.000000Z","id":322}',
            ),
            59 =>
            array(
                'id' => 60,
                'user_id' => 1,
                'log_date' => '2023-07-10 01:49:17',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":75,"kriteria_id":8,"nilai":"7","updated_at":"2023-07-09T18:49:17.000000Z","created_at":"2023-07-09T18:49:17.000000Z","id":323}',
            ),
            60 =>
            array(
                'id' => 61,
                'user_id' => 1,
                'log_date' => '2023-07-10 01:49:17',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":75,"kriteria_id":9,"nilai":"83","updated_at":"2023-07-09T18:49:17.000000Z","created_at":"2023-07-09T18:49:17.000000Z","id":324}',
            ),
            61 =>
            array(
                'id' => 62,
                'user_id' => 1,
                'log_date' => '2023-07-10 01:49:17',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nama":"HASBI ABDUL HUSAIN","import_id":22,"slug":"hasbi-abdul-husain","updated_at":"2023-07-09T18:49:17.000000Z","created_at":"2023-07-09T18:49:17.000000Z","id":76}',
            ),
            62 =>
            array(
                'id' => 63,
                'user_id' => 1,
                'log_date' => '2023-07-10 01:49:17',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":76,"kriteria_id":5,"nilai":"87","updated_at":"2023-07-09T18:49:17.000000Z","created_at":"2023-07-09T18:49:17.000000Z","id":325}',
            ),
            63 =>
            array(
                'id' => 64,
                'user_id' => 1,
                'log_date' => '2023-07-10 01:49:17',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":76,"kriteria_id":6,"nilai":"2","updated_at":"2023-07-09T18:49:17.000000Z","created_at":"2023-07-09T18:49:17.000000Z","id":326}',
            ),
            64 =>
            array(
                'id' => 65,
                'user_id' => 1,
                'log_date' => '2023-07-10 01:49:17',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":76,"kriteria_id":7,"nilai":"22","updated_at":"2023-07-09T18:49:17.000000Z","created_at":"2023-07-09T18:49:17.000000Z","id":327}',
            ),
            65 =>
            array(
                'id' => 66,
                'user_id' => 1,
                'log_date' => '2023-07-10 01:49:17',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":76,"kriteria_id":8,"nilai":"19","updated_at":"2023-07-09T18:49:17.000000Z","created_at":"2023-07-09T18:49:17.000000Z","id":328}',
            ),
            66 =>
            array(
                'id' => 67,
                'user_id' => 1,
                'log_date' => '2023-07-10 01:49:17',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":76,"kriteria_id":9,"nilai":"8","updated_at":"2023-07-09T18:49:17.000000Z","created_at":"2023-07-09T18:49:17.000000Z","id":329}',
            ),
            67 =>
            array(
                'id' => 68,
                'user_id' => 1,
                'log_date' => '2023-07-10 01:49:17',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nama":"Super Admin","import_id":22,"slug":"isep-lutpi-nur","updated_at":"2023-07-09T18:49:17.000000Z","created_at":"2023-07-09T18:49:17.000000Z","id":77}',
            ),
            68 =>
            array(
                'id' => 69,
                'user_id' => 1,
                'log_date' => '2023-07-10 01:49:17',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":77,"kriteria_id":5,"nilai":"73","updated_at":"2023-07-09T18:49:17.000000Z","created_at":"2023-07-09T18:49:17.000000Z","id":330}',
            ),
            69 =>
            array(
                'id' => 70,
                'user_id' => 1,
                'log_date' => '2023-07-10 01:49:17',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":77,"kriteria_id":6,"nilai":"32","updated_at":"2023-07-09T18:49:17.000000Z","created_at":"2023-07-09T18:49:17.000000Z","id":331}',
            ),
            70 =>
            array(
                'id' => 71,
                'user_id' => 1,
                'log_date' => '2023-07-10 01:49:17',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":77,"kriteria_id":7,"nilai":"83","updated_at":"2023-07-09T18:49:17.000000Z","created_at":"2023-07-09T18:49:17.000000Z","id":332}',
            ),
            71 =>
            array(
                'id' => 72,
                'user_id' => 1,
                'log_date' => '2023-07-10 01:49:17',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":77,"kriteria_id":8,"nilai":"67","updated_at":"2023-07-09T18:49:17.000000Z","created_at":"2023-07-09T18:49:17.000000Z","id":333}',
            ),
            72 =>
            array(
                'id' => 73,
                'user_id' => 1,
                'log_date' => '2023-07-10 01:49:17',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":77,"kriteria_id":9,"nilai":"43","updated_at":"2023-07-09T18:49:17.000000Z","created_at":"2023-07-09T18:49:17.000000Z","id":334}',
            ),
            73 =>
            array(
                'id' => 74,
                'user_id' => 1,
                'log_date' => '2023-07-10 01:49:17',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nama":"M. FAISHAL","import_id":22,"slug":"m-faishal","updated_at":"2023-07-09T18:49:17.000000Z","created_at":"2023-07-09T18:49:17.000000Z","id":78}',
            ),
            74 =>
            array(
                'id' => 75,
                'user_id' => 1,
                'log_date' => '2023-07-10 01:49:17',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":78,"kriteria_id":5,"nilai":"51","updated_at":"2023-07-09T18:49:17.000000Z","created_at":"2023-07-09T18:49:17.000000Z","id":335}',
            ),
            75 =>
            array(
                'id' => 76,
                'user_id' => 1,
                'log_date' => '2023-07-10 01:49:17',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":78,"kriteria_id":6,"nilai":"11","updated_at":"2023-07-09T18:49:17.000000Z","created_at":"2023-07-09T18:49:17.000000Z","id":336}',
            ),
            76 =>
            array(
                'id' => 77,
                'user_id' => 1,
                'log_date' => '2023-07-10 01:49:17',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":78,"kriteria_id":7,"nilai":"8","updated_at":"2023-07-09T18:49:17.000000Z","created_at":"2023-07-09T18:49:17.000000Z","id":337}',
            ),
            77 =>
            array(
                'id' => 78,
                'user_id' => 1,
                'log_date' => '2023-07-10 01:49:17',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":78,"kriteria_id":8,"nilai":"85","updated_at":"2023-07-09T18:49:17.000000Z","created_at":"2023-07-09T18:49:17.000000Z","id":338}',
            ),
            78 =>
            array(
                'id' => 79,
                'user_id' => 1,
                'log_date' => '2023-07-10 01:49:17',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":78,"kriteria_id":9,"nilai":"27","updated_at":"2023-07-09T18:49:17.000000Z","created_at":"2023-07-09T18:49:17.000000Z","id":339}',
            ),
            79 =>
            array(
                'id' => 80,
                'user_id' => 1,
                'log_date' => '2023-07-10 01:49:18',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nama":"M. ILHAM FAISAL","import_id":22,"slug":"m-ilham-faisal","updated_at":"2023-07-09T18:49:18.000000Z","created_at":"2023-07-09T18:49:18.000000Z","id":79}',
            ),
            80 =>
            array(
                'id' => 81,
                'user_id' => 1,
                'log_date' => '2023-07-10 01:49:18',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":79,"kriteria_id":5,"nilai":"30","updated_at":"2023-07-09T18:49:18.000000Z","created_at":"2023-07-09T18:49:18.000000Z","id":340}',
            ),
            81 =>
            array(
                'id' => 82,
                'user_id' => 1,
                'log_date' => '2023-07-10 01:49:18',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":79,"kriteria_id":6,"nilai":"73","updated_at":"2023-07-09T18:49:18.000000Z","created_at":"2023-07-09T18:49:18.000000Z","id":341}',
            ),
            82 =>
            array(
                'id' => 83,
                'user_id' => 1,
                'log_date' => '2023-07-10 01:49:18',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":79,"kriteria_id":7,"nilai":"42","updated_at":"2023-07-09T18:49:18.000000Z","created_at":"2023-07-09T18:49:18.000000Z","id":342}',
            ),
            83 =>
            array(
                'id' => 84,
                'user_id' => 1,
                'log_date' => '2023-07-10 01:49:18',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":79,"kriteria_id":8,"nilai":"25","updated_at":"2023-07-09T18:49:18.000000Z","created_at":"2023-07-09T18:49:18.000000Z","id":343}',
            ),
            84 =>
            array(
                'id' => 85,
                'user_id' => 1,
                'log_date' => '2023-07-10 01:49:18',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":79,"kriteria_id":9,"nilai":"90","updated_at":"2023-07-09T18:49:18.000000Z","created_at":"2023-07-09T18:49:18.000000Z","id":344}',
            ),
            85 =>
            array(
                'id' => 86,
                'user_id' => 1,
                'log_date' => '2023-07-10 01:49:18',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nama":"MUHAMMAD CAHYADI","import_id":22,"slug":"muhammad-cahyadi","updated_at":"2023-07-09T18:49:18.000000Z","created_at":"2023-07-09T18:49:18.000000Z","id":80}',
            ),
            86 =>
            array(
                'id' => 87,
                'user_id' => 1,
                'log_date' => '2023-07-10 01:49:18',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":80,"kriteria_id":5,"nilai":"9","updated_at":"2023-07-09T18:49:18.000000Z","created_at":"2023-07-09T18:49:18.000000Z","id":345}',
            ),
            87 =>
            array(
                'id' => 88,
                'user_id' => 1,
                'log_date' => '2023-07-10 01:49:18',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":80,"kriteria_id":6,"nilai":"8","updated_at":"2023-07-09T18:49:18.000000Z","created_at":"2023-07-09T18:49:18.000000Z","id":346}',
            ),
            88 =>
            array(
                'id' => 89,
                'user_id' => 1,
                'log_date' => '2023-07-10 01:49:18',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":80,"kriteria_id":7,"nilai":"19","updated_at":"2023-07-09T18:49:18.000000Z","created_at":"2023-07-09T18:49:18.000000Z","id":347}',
            ),
            89 =>
            array(
                'id' => 90,
                'user_id' => 1,
                'log_date' => '2023-07-10 01:49:18',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":80,"kriteria_id":8,"nilai":"25","updated_at":"2023-07-09T18:49:18.000000Z","created_at":"2023-07-09T18:49:18.000000Z","id":348}',
            ),
            90 =>
            array(
                'id' => 91,
                'user_id' => 1,
                'log_date' => '2023-07-10 01:49:18',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":80,"kriteria_id":9,"nilai":"3","updated_at":"2023-07-09T18:49:18.000000Z","created_at":"2023-07-09T18:49:18.000000Z","id":349}',
            ),
            91 =>
            array(
                'id' => 92,
                'user_id' => 1,
                'log_date' => '2023-07-10 01:49:18',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nama":"MUHAMMAD IMAN NURJAMAN","import_id":22,"slug":"muhammad-iman-nurjaman","updated_at":"2023-07-09T18:49:18.000000Z","created_at":"2023-07-09T18:49:18.000000Z","id":81}',
            ),
            92 =>
            array(
                'id' => 93,
                'user_id' => 1,
                'log_date' => '2023-07-10 01:49:18',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":81,"kriteria_id":5,"nilai":"39","updated_at":"2023-07-09T18:49:18.000000Z","created_at":"2023-07-09T18:49:18.000000Z","id":350}',
            ),
            93 =>
            array(
                'id' => 94,
                'user_id' => 1,
                'log_date' => '2023-07-10 01:49:18',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":81,"kriteria_id":6,"nilai":"83","updated_at":"2023-07-09T18:49:18.000000Z","created_at":"2023-07-09T18:49:18.000000Z","id":351}',
            ),
            94 =>
            array(
                'id' => 95,
                'user_id' => 1,
                'log_date' => '2023-07-10 01:49:18',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":81,"kriteria_id":7,"nilai":"43","updated_at":"2023-07-09T18:49:18.000000Z","created_at":"2023-07-09T18:49:18.000000Z","id":352}',
            ),
            95 =>
            array(
                'id' => 96,
                'user_id' => 1,
                'log_date' => '2023-07-10 01:49:18',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":81,"kriteria_id":8,"nilai":"22","updated_at":"2023-07-09T18:49:18.000000Z","created_at":"2023-07-09T18:49:18.000000Z","id":353}',
            ),
            96 =>
            array(
                'id' => 97,
                'user_id' => 1,
                'log_date' => '2023-07-10 01:49:18',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":81,"kriteria_id":9,"nilai":"7","updated_at":"2023-07-09T18:49:18.000000Z","created_at":"2023-07-09T18:49:18.000000Z","id":354}',
            ),
            97 =>
            array(
                'id' => 98,
                'user_id' => 1,
                'log_date' => '2023-07-10 01:49:18',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nama":"MUHAMMAD RAIHAN RAHMAN","import_id":22,"slug":"muhammad-raihan-rahman","updated_at":"2023-07-09T18:49:18.000000Z","created_at":"2023-07-09T18:49:18.000000Z","id":82}',
            ),
            98 =>
            array(
                'id' => 99,
                'user_id' => 1,
                'log_date' => '2023-07-10 01:49:18',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":82,"kriteria_id":5,"nilai":"20","updated_at":"2023-07-09T18:49:18.000000Z","created_at":"2023-07-09T18:49:18.000000Z","id":355}',
            ),
            99 =>
            array(
                'id' => 100,
                'user_id' => 1,
                'log_date' => '2023-07-10 01:49:18',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":82,"kriteria_id":6,"nilai":"63","updated_at":"2023-07-09T18:49:18.000000Z","created_at":"2023-07-09T18:49:18.000000Z","id":356}',
            ),
            100 =>
            array(
                'id' => 101,
                'user_id' => 1,
                'log_date' => '2023-07-10 01:49:18',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":82,"kriteria_id":7,"nilai":"35","updated_at":"2023-07-09T18:49:18.000000Z","created_at":"2023-07-09T18:49:18.000000Z","id":357}',
            ),
            101 =>
            array(
                'id' => 102,
                'user_id' => 1,
                'log_date' => '2023-07-10 01:49:18',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":82,"kriteria_id":8,"nilai":"76","updated_at":"2023-07-09T18:49:18.000000Z","created_at":"2023-07-09T18:49:18.000000Z","id":358}',
            ),
            102 =>
            array(
                'id' => 103,
                'user_id' => 1,
                'log_date' => '2023-07-10 01:49:18',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":82,"kriteria_id":9,"nilai":"32","updated_at":"2023-07-09T18:49:18.000000Z","created_at":"2023-07-09T18:49:18.000000Z","id":359}',
            ),
            103 =>
            array(
                'id' => 104,
                'user_id' => 1,
                'log_date' => '2023-07-10 01:49:18',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nama":"NASRIATUL HAMIDAH","import_id":22,"slug":"nasriatul-hamidah","updated_at":"2023-07-09T18:49:18.000000Z","created_at":"2023-07-09T18:49:18.000000Z","id":83}',
            ),
            104 =>
            array(
                'id' => 105,
                'user_id' => 1,
                'log_date' => '2023-07-10 01:49:18',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":83,"kriteria_id":5,"nilai":"42","updated_at":"2023-07-09T18:49:18.000000Z","created_at":"2023-07-09T18:49:18.000000Z","id":360}',
            ),
            105 =>
            array(
                'id' => 106,
                'user_id' => 1,
                'log_date' => '2023-07-10 01:49:18',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":83,"kriteria_id":6,"nilai":"97","updated_at":"2023-07-09T18:49:18.000000Z","created_at":"2023-07-09T18:49:18.000000Z","id":361}',
            ),
            106 =>
            array(
                'id' => 107,
                'user_id' => 1,
                'log_date' => '2023-07-10 01:49:18',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":83,"kriteria_id":7,"nilai":"20","updated_at":"2023-07-09T18:49:18.000000Z","created_at":"2023-07-09T18:49:18.000000Z","id":362}',
            ),
            107 =>
            array(
                'id' => 108,
                'user_id' => 1,
                'log_date' => '2023-07-10 01:49:18',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":83,"kriteria_id":8,"nilai":"60","updated_at":"2023-07-09T18:49:18.000000Z","created_at":"2023-07-09T18:49:18.000000Z","id":363}',
            ),
            108 =>
            array(
                'id' => 109,
                'user_id' => 1,
                'log_date' => '2023-07-10 01:49:18',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":83,"kriteria_id":9,"nilai":"83","updated_at":"2023-07-09T18:49:18.000000Z","created_at":"2023-07-09T18:49:18.000000Z","id":364}',
            ),
            109 =>
            array(
                'id' => 110,
                'user_id' => 1,
                'log_date' => '2023-07-10 01:49:18',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nama":"NU\\u2019MAN BASIR","import_id":22,"slug":"nu-man-basir","updated_at":"2023-07-09T18:49:18.000000Z","created_at":"2023-07-09T18:49:18.000000Z","id":84}',
            ),
            110 =>
            array(
                'id' => 111,
                'user_id' => 1,
                'log_date' => '2023-07-10 01:49:18',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":84,"kriteria_id":5,"nilai":"34","updated_at":"2023-07-09T18:49:18.000000Z","created_at":"2023-07-09T18:49:18.000000Z","id":365}',
            ),
            111 =>
            array(
                'id' => 112,
                'user_id' => 1,
                'log_date' => '2023-07-10 01:49:18',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":84,"kriteria_id":6,"nilai":"15","updated_at":"2023-07-09T18:49:18.000000Z","created_at":"2023-07-09T18:49:18.000000Z","id":366}',
            ),
            112 =>
            array(
                'id' => 113,
                'user_id' => 1,
                'log_date' => '2023-07-10 01:49:18',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":84,"kriteria_id":7,"nilai":"53","updated_at":"2023-07-09T18:49:18.000000Z","created_at":"2023-07-09T18:49:18.000000Z","id":367}',
            ),
            113 =>
            array(
                'id' => 114,
                'user_id' => 1,
                'log_date' => '2023-07-10 01:49:18',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":84,"kriteria_id":8,"nilai":"16","updated_at":"2023-07-09T18:49:18.000000Z","created_at":"2023-07-09T18:49:18.000000Z","id":368}',
            ),
            114 =>
            array(
                'id' => 115,
                'user_id' => 1,
                'log_date' => '2023-07-10 01:49:18',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":84,"kriteria_id":9,"nilai":"43","updated_at":"2023-07-09T18:49:18.000000Z","created_at":"2023-07-09T18:49:18.000000Z","id":369}',
            ),
            115 =>
            array(
                'id' => 116,
                'user_id' => 1,
                'log_date' => '2023-07-10 01:49:18',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nama":"PUPUNG RUSTIKA","import_id":22,"slug":"pupung-rustika","updated_at":"2023-07-09T18:49:18.000000Z","created_at":"2023-07-09T18:49:18.000000Z","id":85}',
            ),
            116 =>
            array(
                'id' => 117,
                'user_id' => 1,
                'log_date' => '2023-07-10 01:49:18',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":85,"kriteria_id":5,"nilai":"62","updated_at":"2023-07-09T18:49:18.000000Z","created_at":"2023-07-09T18:49:18.000000Z","id":370}',
            ),
            117 =>
            array(
                'id' => 118,
                'user_id' => 1,
                'log_date' => '2023-07-10 01:49:18',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":85,"kriteria_id":6,"nilai":"33","updated_at":"2023-07-09T18:49:18.000000Z","created_at":"2023-07-09T18:49:18.000000Z","id":371}',
            ),
            118 =>
            array(
                'id' => 119,
                'user_id' => 1,
                'log_date' => '2023-07-10 01:49:18',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":85,"kriteria_id":7,"nilai":"55","updated_at":"2023-07-09T18:49:18.000000Z","created_at":"2023-07-09T18:49:18.000000Z","id":372}',
            ),
            119 =>
            array(
                'id' => 120,
                'user_id' => 1,
                'log_date' => '2023-07-10 01:49:18',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":85,"kriteria_id":8,"nilai":"48","updated_at":"2023-07-09T18:49:18.000000Z","created_at":"2023-07-09T18:49:18.000000Z","id":373}',
            ),
            120 =>
            array(
                'id' => 121,
                'user_id' => 1,
                'log_date' => '2023-07-10 01:49:18',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":85,"kriteria_id":9,"nilai":"27","updated_at":"2023-07-09T18:49:18.000000Z","created_at":"2023-07-09T18:49:18.000000Z","id":374}',
            ),
            121 =>
            array(
                'id' => 122,
                'user_id' => 1,
                'log_date' => '2023-07-10 01:49:18',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nama":"RAMLAN HIDAYAT","import_id":22,"slug":"ramlan-hidayat","updated_at":"2023-07-09T18:49:18.000000Z","created_at":"2023-07-09T18:49:18.000000Z","id":86}',
            ),
            122 =>
            array(
                'id' => 123,
                'user_id' => 1,
                'log_date' => '2023-07-10 01:49:18',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":86,"kriteria_id":5,"nilai":"59","updated_at":"2023-07-09T18:49:18.000000Z","created_at":"2023-07-09T18:49:18.000000Z","id":375}',
            ),
            123 =>
            array(
                'id' => 124,
                'user_id' => 1,
                'log_date' => '2023-07-10 01:49:18',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":86,"kriteria_id":6,"nilai":"86","updated_at":"2023-07-09T18:49:18.000000Z","created_at":"2023-07-09T18:49:18.000000Z","id":376}',
            ),
            124 =>
            array(
                'id' => 125,
                'user_id' => 1,
                'log_date' => '2023-07-10 01:49:18',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":86,"kriteria_id":7,"nilai":"41","updated_at":"2023-07-09T18:49:18.000000Z","created_at":"2023-07-09T18:49:18.000000Z","id":377}',
            ),
            125 =>
            array(
                'id' => 126,
                'user_id' => 1,
                'log_date' => '2023-07-10 01:49:18',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":86,"kriteria_id":8,"nilai":"0","updated_at":"2023-07-09T18:49:18.000000Z","created_at":"2023-07-09T18:49:18.000000Z","id":378}',
            ),
            126 =>
            array(
                'id' => 127,
                'user_id' => 1,
                'log_date' => '2023-07-10 01:49:18',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":86,"kriteria_id":9,"nilai":"90","updated_at":"2023-07-09T18:49:18.000000Z","created_at":"2023-07-09T18:49:18.000000Z","id":379}',
            ),
            127 =>
            array(
                'id' => 128,
                'user_id' => 1,
                'log_date' => '2023-07-10 01:49:18',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nama":"RISMAWANTI AWALIAH S","import_id":22,"slug":"rismawanti-awaliah-s","updated_at":"2023-07-09T18:49:18.000000Z","created_at":"2023-07-09T18:49:18.000000Z","id":87}',
            ),
            128 =>
            array(
                'id' => 129,
                'user_id' => 1,
                'log_date' => '2023-07-10 01:49:18',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":87,"kriteria_id":5,"nilai":"88","updated_at":"2023-07-09T18:49:18.000000Z","created_at":"2023-07-09T18:49:18.000000Z","id":380}',
            ),
            129 =>
            array(
                'id' => 130,
                'user_id' => 1,
                'log_date' => '2023-07-10 01:49:18',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":87,"kriteria_id":6,"nilai":"89","updated_at":"2023-07-09T18:49:18.000000Z","created_at":"2023-07-09T18:49:18.000000Z","id":381}',
            ),
            130 =>
            array(
                'id' => 131,
                'user_id' => 1,
                'log_date' => '2023-07-10 01:49:18',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":87,"kriteria_id":7,"nilai":"92","updated_at":"2023-07-09T18:49:18.000000Z","created_at":"2023-07-09T18:49:18.000000Z","id":382}',
            ),
            131 =>
            array(
                'id' => 132,
                'user_id' => 1,
                'log_date' => '2023-07-10 01:49:18',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":87,"kriteria_id":8,"nilai":"100","updated_at":"2023-07-09T18:49:18.000000Z","created_at":"2023-07-09T18:49:18.000000Z","id":383}',
            ),
            132 =>
            array(
                'id' => 133,
                'user_id' => 1,
                'log_date' => '2023-07-10 01:49:18',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":87,"kriteria_id":9,"nilai":"3","updated_at":"2023-07-09T18:49:18.000000Z","created_at":"2023-07-09T18:49:18.000000Z","id":384}',
            ),
            133 =>
            array(
                'id' => 134,
                'user_id' => 1,
                'log_date' => '2023-07-10 01:49:18',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nama":"SILVIA ANGGRAENI","import_id":22,"slug":"silvia-anggraeni","updated_at":"2023-07-09T18:49:18.000000Z","created_at":"2023-07-09T18:49:18.000000Z","id":88}',
            ),
            134 =>
            array(
                'id' => 135,
                'user_id' => 1,
                'log_date' => '2023-07-10 01:49:18',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":88,"kriteria_id":5,"nilai":"95","updated_at":"2023-07-09T18:49:18.000000Z","created_at":"2023-07-09T18:49:18.000000Z","id":385}',
            ),
            135 =>
            array(
                'id' => 136,
                'user_id' => 1,
                'log_date' => '2023-07-10 01:49:18',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":88,"kriteria_id":6,"nilai":"25","updated_at":"2023-07-09T18:49:18.000000Z","created_at":"2023-07-09T18:49:18.000000Z","id":386}',
            ),
            136 =>
            array(
                'id' => 137,
                'user_id' => 1,
                'log_date' => '2023-07-10 01:49:18',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":88,"kriteria_id":7,"nilai":"27","updated_at":"2023-07-09T18:49:18.000000Z","created_at":"2023-07-09T18:49:18.000000Z","id":387}',
            ),
            137 =>
            array(
                'id' => 138,
                'user_id' => 1,
                'log_date' => '2023-07-10 01:49:18',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":88,"kriteria_id":8,"nilai":"94","updated_at":"2023-07-09T18:49:18.000000Z","created_at":"2023-07-09T18:49:18.000000Z","id":388}',
            ),
            138 =>
            array(
                'id' => 139,
                'user_id' => 1,
                'log_date' => '2023-07-10 01:49:18',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":88,"kriteria_id":9,"nilai":"7","updated_at":"2023-07-09T18:49:18.000000Z","created_at":"2023-07-09T18:49:18.000000Z","id":389}',
            ),
            139 =>
            array(
                'id' => 140,
                'user_id' => 1,
                'log_date' => '2023-07-10 01:49:18',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nama":"SOLEHUDIN","import_id":22,"slug":"solehudin","updated_at":"2023-07-09T18:49:18.000000Z","created_at":"2023-07-09T18:49:18.000000Z","id":89}',
            ),
            140 =>
            array(
                'id' => 141,
                'user_id' => 1,
                'log_date' => '2023-07-10 01:49:18',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":89,"kriteria_id":5,"nilai":"61","updated_at":"2023-07-09T18:49:18.000000Z","created_at":"2023-07-09T18:49:18.000000Z","id":390}',
            ),
            141 =>
            array(
                'id' => 142,
                'user_id' => 1,
                'log_date' => '2023-07-10 01:49:18',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":89,"kriteria_id":6,"nilai":"60","updated_at":"2023-07-09T18:49:18.000000Z","created_at":"2023-07-09T18:49:18.000000Z","id":391}',
            ),
            142 =>
            array(
                'id' => 143,
                'user_id' => 1,
                'log_date' => '2023-07-10 01:49:18',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":89,"kriteria_id":7,"nilai":"33","updated_at":"2023-07-09T18:49:18.000000Z","created_at":"2023-07-09T18:49:18.000000Z","id":392}',
            ),
            143 =>
            array(
                'id' => 144,
                'user_id' => 1,
                'log_date' => '2023-07-10 01:49:18',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":89,"kriteria_id":8,"nilai":"94","updated_at":"2023-07-09T18:49:18.000000Z","created_at":"2023-07-09T18:49:18.000000Z","id":393}',
            ),
            144 =>
            array(
                'id' => 145,
                'user_id' => 1,
                'log_date' => '2023-07-10 01:49:18',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":89,"kriteria_id":9,"nilai":"32","updated_at":"2023-07-09T18:49:18.000000Z","created_at":"2023-07-09T18:49:18.000000Z","id":394}',
            ),
            145 =>
            array(
                'id' => 146,
                'user_id' => 1,
                'log_date' => '2023-07-10 01:49:18',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nama":"SRI HASTUTI","import_id":22,"slug":"sri-hastuti","updated_at":"2023-07-09T18:49:18.000000Z","created_at":"2023-07-09T18:49:18.000000Z","id":90}',
            ),
            146 =>
            array(
                'id' => 147,
                'user_id' => 1,
                'log_date' => '2023-07-10 01:49:18',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":90,"kriteria_id":5,"nilai":"58","updated_at":"2023-07-09T18:49:18.000000Z","created_at":"2023-07-09T18:49:18.000000Z","id":395}',
            ),
            147 =>
            array(
                'id' => 148,
                'user_id' => 1,
                'log_date' => '2023-07-10 01:49:18',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":90,"kriteria_id":6,"nilai":"64","updated_at":"2023-07-09T18:49:18.000000Z","created_at":"2023-07-09T18:49:18.000000Z","id":396}',
            ),
            148 =>
            array(
                'id' => 149,
                'user_id' => 1,
                'log_date' => '2023-07-10 01:49:18',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":90,"kriteria_id":7,"nilai":"30","updated_at":"2023-07-09T18:49:18.000000Z","created_at":"2023-07-09T18:49:18.000000Z","id":397}',
            ),
            149 =>
            array(
                'id' => 150,
                'user_id' => 1,
                'log_date' => '2023-07-10 01:49:18',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":90,"kriteria_id":8,"nilai":"23","updated_at":"2023-07-09T18:49:18.000000Z","created_at":"2023-07-09T18:49:18.000000Z","id":398}',
            ),
            150 =>
            array(
                'id' => 151,
                'user_id' => 1,
                'log_date' => '2023-07-10 01:49:18',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":90,"kriteria_id":9,"nilai":"83","updated_at":"2023-07-09T18:49:18.000000Z","created_at":"2023-07-09T18:49:18.000000Z","id":399}',
            ),
            151 =>
            array(
                'id' => 152,
                'user_id' => 1,
                'log_date' => '2023-07-10 01:49:18',
                'table_name' => 'alternatif',
                'log_type' => 'create',
                'data' => '{"nama":"THIA RAMADHANI AMIN","import_id":22,"slug":"thia-ramadhani-amin","updated_at":"2023-07-09T18:49:18.000000Z","created_at":"2023-07-09T18:49:18.000000Z","id":91}',
            ),
            152 =>
            array(
                'id' => 153,
                'user_id' => 1,
                'log_date' => '2023-07-10 01:49:18',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":91,"kriteria_id":5,"nilai":"73","updated_at":"2023-07-09T18:49:18.000000Z","created_at":"2023-07-09T18:49:18.000000Z","id":400}',
            ),
            153 =>
            array(
                'id' => 154,
                'user_id' => 1,
                'log_date' => '2023-07-10 01:49:18',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":91,"kriteria_id":6,"nilai":"52","updated_at":"2023-07-09T18:49:18.000000Z","created_at":"2023-07-09T18:49:18.000000Z","id":401}',
            ),
            154 =>
            array(
                'id' => 155,
                'user_id' => 1,
                'log_date' => '2023-07-10 01:49:18',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":91,"kriteria_id":7,"nilai":"63","updated_at":"2023-07-09T18:49:18.000000Z","created_at":"2023-07-09T18:49:18.000000Z","id":402}',
            ),
            155 =>
            array(
                'id' => 156,
                'user_id' => 1,
                'log_date' => '2023-07-10 01:49:18',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":91,"kriteria_id":8,"nilai":"30","updated_at":"2023-07-09T18:49:18.000000Z","created_at":"2023-07-09T18:49:18.000000Z","id":403}',
            ),
            156 =>
            array(
                'id' => 157,
                'user_id' => 1,
                'log_date' => '2023-07-10 01:49:18',
                'table_name' => 'alternatif_nilai',
                'log_type' => 'create',
                'data' => '{"alternatif_id":91,"kriteria_id":9,"nilai":"22","updated_at":"2023-07-09T18:49:18.000000Z","created_at":"2023-07-09T18:49:18.000000Z","id":404}',
            ),
            157 =>
            array(
                'id' => 158,
                'user_id' => 1,
                'log_date' => '2023-07-10 01:49:18',
                'table_name' => 'import_alternatif',
                'log_type' => 'edit',
                'data' => '{"nama":"Data Testing","slug":"data-testing","updated_at":"2023-07-10 01:49:17","created_at":"2023-07-10 01:49:17","id":22}',
            ),
        ));
    }
}
