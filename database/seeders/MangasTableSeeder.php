<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MangasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $param = [
            'name' => 'ヒロアカ',
            'price' => 459,
            'purchase_number' => 3,
        ];
        DB::table('mangas')->insert($param);

        $param = [
            'name' => '最終兵器彼女',
            'price' => 693,
            'purchase_number' => 5,
        ];
        DB::table('mangas')->insert($param);

        $param = [
            'name' => 'BUNGO',
            'price' => 679,
            'purchase_number' => 23,
        ];
        DB::table('mangas')->insert($param);
    }
}
