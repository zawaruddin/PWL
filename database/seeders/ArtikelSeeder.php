<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArtikelSeeder extends Seeder
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
                'judul' => 'Belajar Model Dengan Laravel 1',
                'slug' => 'belajar-model-dengan-laravel-1',
                'isi' => '1',
                'penulis' => 'zawa',
                'draft' => 0
            ],
            [
                'judul' => 'Belajar Model Dengan Laravel 2',
                'slug' => 'belajar-model-dengan-laravel-2',
                'isi' => '2',
                'penulis' => 'aisyah',
                'draft' => 0
            ],
            [
                'judul' => 'Belajar Model Dengan Laravel 3',
                'slug' => 'belajar-model-dengan-laravel-3',
                'isi' => '3',
                'penulis' => 'amrul',
                'draft' => 0
                ]
        ];
        DB::table('artikel')->insert($data);
    }
}
