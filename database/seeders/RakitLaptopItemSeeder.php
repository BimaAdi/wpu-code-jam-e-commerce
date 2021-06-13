<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RakitLaptopItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rakit_laptop_items')->insert([
            'name' => 'Windows 10 (64 bit)',
            'price' =>  1000000000,
            'rakit_laptop_id' => 1,
            'selected' => true
        ]);

        DB::table('rakit_laptop_items')->insert([
            'name' => 'Ubuntu 20.04 (64 bit)',
            'price' =>  0,
            'rakit_laptop_id' => 1,
            'selected' => false
        ]);

        DB::table('rakit_laptop_items')->insert([
            'name' => 'RHEL 8 (64 bit)',
            'price' =>  500000,
            'rakit_laptop_id' => 1,
            'selected' => false
        ]);

        DB::table('rakit_laptop_items')->insert([
            'name' => 'Tanpa Operating System',
            'price' =>  0,
            'rakit_laptop_id' => 1,
            'selected' => false
        ]);

        DB::table('rakit_laptop_items')->insert([
            'name' => '4 GB',
            'price' =>  0,
            'rakit_laptop_id' => 2,
            'selected' => true
        ]);

        DB::table('rakit_laptop_items')->insert([
            'name' => '8 GB',
            'price' =>  2000000,
            'rakit_laptop_id' => 2,
            'selected' => false
        ]);

        DB::table('rakit_laptop_items')->insert([
            'name' => '16 GB',
            'price' =>  4000000,
            'rakit_laptop_id' => 2,
            'selected' => false
        ]);

        DB::table('rakit_laptop_items')->insert([
            'name' => '32 GB',
            'price' =>  8000000,
            'rakit_laptop_id' => 2,
            'selected' => false
        ]);

        DB::table('rakit_laptop_items')->insert([
            'name' => 'AMD Ryzen 3',
            'price' =>  2500000,
            'rakit_laptop_id' => 3,
            'selected' => true
        ]);

        DB::table('rakit_laptop_items')->insert([
            'name' => 'AMD Ryzen 5',
            'price' =>  4500000,
            'rakit_laptop_id' => 3,
            'selected' => false
        ]);

        DB::table('rakit_laptop_items')->insert([
            'name' => 'AMD Ryzen 7',
            'price' =>  7500000,
            'rakit_laptop_id' => 3,
            'selected' => false
        ]);

        DB::table('rakit_laptop_items')->insert([
            'name' => 'AMD Ryzen Threadripper',
            'price' =>  1000000,
            'rakit_laptop_id' => 3,
            'selected' => false
        ]);

        DB::table('rakit_laptop_items')->insert([
            'name' => 'Intel Core i3',
            'price' =>  300000,
            'rakit_laptop_id' => 3,
            'selected' => false
        ]);

        DB::table('rakit_laptop_items')->insert([
            'name' => 'Intel Core i5',
            'price' =>  500000,
            'rakit_laptop_id' => 3,
            'selected' => false
        ]);

        DB::table('rakit_laptop_items')->insert([
            'name' => 'Intel Core i7',
            'price' =>  800000,
            'rakit_laptop_id' => 3,
            'selected' => false
        ]);

        DB::table('rakit_laptop_items')->insert([
            'name' => 'Intel Core i9',
            'price' =>  1000000,
            'rakit_laptop_id' => 3,
            'selected' => false
        ]);
    }
}
