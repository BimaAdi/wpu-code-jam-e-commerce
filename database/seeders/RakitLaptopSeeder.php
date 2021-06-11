<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RakitLaptopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rakit_laptops')->insert([
            'title' => 'Operating System'
        ]);

        DB::table('rakit_laptops')->insert([
            'title' => 'Memory'
        ]);

        DB::table('rakit_laptops')->insert([
            'title' => 'Processor'
        ]);
    }
}
