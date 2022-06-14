<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menus')->insert([
            [
            'id' => 1,
            'name' => 'Kebijakan Mutu',
            'level' => 1,
            'isParent' => false,
            'parentId' => 100, //menu utama dengan parent id 100, 200, 300, 400, dst
            ],
            [
            'id' => 2,
            'name' => 'Dasar Hukum',
            'level' => 1,
            'isParent' => 1,
            'parentId' => 100,
            ],
            [
            'id' => 3,
            'name' => 'Struktur Organisasi',
            'level' => 1,
            'isParent' => false,
            'parentId' => 100,
            ],
            [
            'id' => 4,
            'name' => 'Sertifikat ISO',
            'level' => 1,
            'isParent' => 1,
            'parentId' => 100,
            ],
            [
            'id' => 5,
            'name' => 'Peraturan Mentri',
            'level' => 2,
            'isParent' => false,
            'parentId' => 2,
            ],
            [
            'id' => 6,
            'name' => 'Perka BPOM',
            'level' => 2,
            'isParent' => false,
            'parentId' => 2,
            ],
            [
            'id' => 7,
            'name' => 'Kepka BPOM',
            'level' => 2,
            'isParent' => false,
            'parentId' => 2,
            ],
            [
            'id' => 8,
            'name' => 'Kep. Sestama',
            'level' => 2,
            'isParent' => false,
            'parentId' => 2,
            ],
            [
            'id' => 9,
            'name' => 'Peraturan Lainnya',
            'level' => 2,
            'isParent' => false,
            'parentId' => 2,
            ],
            [
            'id' => 9,
            'name' => 'ISO 9001:2015',
            'level' => 2,
            'isParent' => false,
            'parentId' => 4,
            ],
            [
            'id' => 10,
            'name' => 'ISO/IEC 17025:2017',
            'level' => 2,
            'isParent' => false,
            'parentId' => 4,
            ],
            [
            'id' => 11,
            'name' => 'ISO 45001',
            'level' => 2,
            'isParent' => false,
            'parentId' => 4,
            ],
            [
            'id' => 12,
            'name' => 'Dokumen QMS',
            'level' => 1,
            'isParent' => 1,
            'parentId' => 200,
            ],
            [
            'id' => 13,
            'name' => 'Hasil Audit Mutu',
            'level' => 1,
            'isParent' => 1,
            'parentId' => 200,
            ],
            [
            'id' => 14,
            'name' => 'Tinjauan Manajemen',
            'level' => 1,
            'isParent' => false,
            'parentId' => 200,
            ],
            [
            'id' => 15,
            'name' => 'Daftar Induk Dokumen Terintegrasi',
            'level' => 2,
            'isParent' => false,
            'parentId' => 12,
            ],
            [
            'id' => 16,
            'name' => 'Manual Organisasi',
            'level' => 2,
            'isParent' => false,
            'parentId' => 12,
            ],
            [
            'id' => 17,
            'name' => 'SOP Makro',
            'level' => 2,
            'isParent' => false,
            'parentId' => 12,
            ],
            [
            'id' => 18,
            'name' => 'Instruksi Kerja Jaminan Mutu (IKJM)',
            'level' => 2,
            'isParent' => false,
            'parentId' => 12,
            ],
            [
            'id' => 19,
            'name' => 'Instruksi Kerja Lab',
            'level' => 2,
            'isParent' => false,
            'parentId' => 12,
            ],
            [
            'id' => 20,
            'name' => 'Instruksi Kerja Alat',
            'level' => 2,
            'isParent' => false,
            'parentId' => 12,
            ],
            [
            'id' => 21,
            'name' => 'Instruksi Kerja K3',
            'level' => 2,
            'isParent' => false,
            'parentId' => 12,
            ],
            [
            'id' => 22,
            'name' => 'Formulir',
            'level' => 2,
            'isParent' => false,
            'parentId' => 12,
            ],
            [
            'id' => 23,
            'name' => 'Audit Eksternal',
            'level' => 2,
            'isParent' => false,
            'parentId' => 13,
            ],
            [
            'id' => 24,
            'name' => 'Audit Internal',
            'level' => 2,
            'isParent' => false,
            'parentId' => 13,
            ],
            [
            'id' => 25,
            'name' => 'Daftar Risiko',
            'level' => 1,
            'isParent' => false,
            'parentId' => 400,
            ],
            [
            'id' => 26,
            'name' => 'Rencana Tindak Pengendalian',
            'level' => 1,
            'isParent' => false,
            'parentId' => 400,
            ],
            [
            'id' => 27,
            'name' => 'Riviu Risiko',
            'level' => 1,
            'isParent' => false,
            'parentId' => 400,
            ],
            [
            'id' => 28,
            'name' => 'HIRADC',
            'level' => 1,
            'isParent' => false,
            'parentId' => 400,
            ],
    ]);
    }
}
