<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        if (($handle = fopen(__DIR__ . './Genres.csv', 'r')) !== false) {
            while (($data = fgetcsv($handle))) {
                DB::table('genres')->insert([
                    'name' => $data[1],
                ]);
            }
            fclose($handle);
        }
    }
}
