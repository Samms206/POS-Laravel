<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class BarangTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = Carbon::now();
        DB::table('barangs')->insert([
            [
                'nama_brg' => 'Sabun',
                'stok' => 50,
                'hrg_jual' => 4000,
                'hrg_beli' => 3000,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'nama_brg' => 'Pasta Gigi',
                'stok' => 100,
                'hrg_jual' => 5000,
                'hrg_beli' => 4000,
                'created_at' => $now,
                'updated_at' => $now
            ],
            [
                'nama_brg' => 'Shampo',
                'stok' => 200,
                'hrg_jual' => 7000,
                'hrg_beli' => 6000,
                'created_at' => $now,
                'updated_at' => $now
            ]
        ]);
    }

}
