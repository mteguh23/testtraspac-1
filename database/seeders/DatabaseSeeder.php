<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'id'=>'1',
            'name'=>'admin',
            'email'=>'admin@email.com',
            'password'=>Hash::make('admin123')
        ]);

        // unit
        DB::table('unit')->insert([
            'nm_unit'=>'unit 1',
            'tempat_tugas'=>'Jakarta'
        ]);
        DB::table('unit')->insert([
            'nm_unit'=>'unit 2',
            'tempat_tugas'=>'Bandung'
        ]);

        // jabatan
        DB::table('jabatan')->insert([
            'nm_jabatan'=>'Kepala Sekretariat Utama',
            'dsc_jabatan'=>'Deskripsi Jabatan Kepala Sekretariat Utama'
        ]);
        DB::table('jabatan')->insert([
            'nm_jabatan'=>'Penyusunan Laporan Keuangan',
            'dsc_jabatan'=>'Deskripsi Jabatan Penyusunan Laporan Keuangan'
        ]);
        DB::table('jabatan')->insert([
            'nm_jabatan'=>'Surveyor Pemetaan Pertama',
            'dsc_jabatan'=>'Deskripsi Jabatan Surveyor Pemetaan Pertama'
        ]);
        DB::table('jabatan')->insert([
            'nm_jabatan'=>'Analisis Data Survey dan Pemetaan',
            'dsc_jabatan'=>'Deskripsi Jabatan Analisis Data Survey dan Pemetaan'
        ]);
        DB::table('jabatan')->insert([
            'nm_jabatan'=>'Kepala Biro Perencanaan, Kepegawaian, dan Hukum',
            'dsc_jabatan'=>'Deskripsi Jabatan Kepala Biro Perencanaan, Kepegawaian, dan Hukum'
        ]);

        // eselon
        DB::table('eselon')->insert([
            'eselon'=>'I',
            'dsc_eselon'=>'Deskripsi Eselon I'
        ]);
        DB::table('eselon')->insert([
            'eselon'=>'II',
            'dsc_eselon'=>'Deskripsi Eselon II'
        ]);
        DB::table('eselon')->insert([
            'eselon'=>'III',
            'dsc_eselon'=>'Deskripsi Eselon III'
        ]);
        DB::table('eselon')->insert([
            'eselon'=>'IV',
            'dsc_eselon'=>'Deskripsi Eselon IV'
        ]);

        // golongan
        DB::table('golongan')->insert([
            'golongan'=>'I',
            'dsc_golongan'=>'Deskripsi Golongan I'
        ]);
        DB::table('golongan')->insert([
            'golongan'=>'II',
            'dsc_golongan'=>'Deskripsi Golongan II'
        ]);
        DB::table('golongan')->insert([
            'golongan'=>'III',
            'dsc_golongan'=>'Deskripsi Golongan III'
        ]);
        DB::table('golongan')->insert([
            'golongan'=>'IV',
            'dsc_golongan'=>'Deskripsi Golongan IV'
        ]);
    }
}
