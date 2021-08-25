<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AreasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        if (($handle = fopen(__DIR__ . './Areas.csv', 'r')) !== false) {
            while (($data = fgetcsv($handle))) {
                DB::table('areas')->insert([
                    'name' => $data[1],
                ]);
            }
            fclose($handle);
        }
    }
}
