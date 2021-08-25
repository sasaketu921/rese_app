<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShopsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        if (($handle = fopen(__DIR__ . './Shops.csv', 'r')) !== false) {
            while (($data = fgetcsv($handle))) {
                DB::table('shops')->insert([
                    'name' => $data[1],
                    'overview' => $data[2],
                    'areas_id' => $data[3],
                    'genres_id' => $data[4],
                    'img' => $data[5],
                ]);
            }
            fclose($handle);
        }
    }
}
