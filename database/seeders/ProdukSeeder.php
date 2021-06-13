<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('produks')->insert([
            [
                'name' => 'T14s (Intel)',
                'price' => 500000,
                'brand' => 'Lenovo',
                'processor' => 'Intel Core I5',
                'ram size' => 4,
                'gpu' => null,
                'type' => 'Office'
            ],
            [
                'name' => 'T14s (AMD)',
                'price' => 450000,
                'brand' => 'Lenovo',
                'processor' => 'AMD Ryzen 5',
                'ram size' => 4,
                'gpu' => null,
                'type' => 'Office'
            ],
            [
                'name' => 'X1 Carbon Gen 9',
                'price' => 1100000,
                'brand' => 'Lenovo',
                'processor' => 'Intel Core I7',
                'ram size' => 8,
                'gpu' => null,
                'type' => 'Office'
            ],
            [
                'name' => 'Legion 7I',
                'price' => 2100000,
                'brand' => 'Lenovo',
                'processor' => 'Intel Core I7',
                'ram size' => 16,
                'gpu' => 'Nvidia GeForce',
                'type' => 'Gaming'
            ],
            [
                'name' => 'Ideapad Slim 9I',
                'price' => 300000,
                'brand' => 'Lenovo',
                'processor' => 'AMD Ryzen 3',
                'ram size' => 4,
                'gpu' => null,
                'type' => 'Office'
            ],
        ]);

        DB::table('produks')->insert([
            [
                'name' => 'Inspiron 14',
                'price' => 500000,
                'brand' => 'Dell',
                'processor' => 'Intel Core I5',
                'ram size' => 4,
                'gpu' => null,
                'type' => 'Office'
            ],
            [
                'name' => 'Latitude 14',
                'price' => 450000,
                'brand' => 'Dell',
                'processor' => 'AMD Ryzen 5',
                'ram size' => 4,
                'gpu' => null,
                'type' => 'Office'
            ],
            [
                'name' => 'XPS 13',
                'price' => 1300000,
                'brand' => 'Dell',
                'processor' => 'Intel Core I7',
                'ram size' => 16,
                'gpu' => null,
                'type' => 'Office'
            ],
            [
                'name' => 'Alienware Area 51',
                'price' => 2100000,
                'brand' => 'Dell',
                'processor' => 'Intel Core I7',
                'ram size' => 16,
                'gpu' => 'Nvidia GeForce',
                'type' => 'Gaming'
            ],
            [
                'name' => 'G15 Gaming',
                'price' => 1800000,
                'brand' => 'Dell',
                'processor' => 'AMD Ryzen Threadripper',
                'ram size' => 16,
                'gpu' => 'Nvidia GeForce',
                'type' => 'Gaming'
            ],
        ]);

        DB::table('produks')->insert([
            [
                'name' => 'ProBook 640',
                'price' => 500000,
                'brand' => 'HP',
                'processor' => 'Intel Core I5',
                'ram size' => 4,
                'gpu' => null,
                'type' => 'Office'
            ],
            [
                'name' => 'Spectre X360',
                'price' => 450000,
                'brand' => 'HP',
                'processor' => 'AMD Ryzen 5',
                'ram size' => 4,
                'gpu' => null,
                'type' => 'Office'
            ],
            [
                'name' => 'Pavilion 15',
                'price' => 1100000,
                'brand' => 'HP',
                'processor' => 'Intel Core I7',
                'ram size' => 8,
                'gpu' => null,
                'type' => 'Office'
            ],
            [
                'name' => 'Laptop',
                'price' => 500000,
                'brand' => 'HP',
                'processor' => 'Intel Core I5',
                'ram size' => 4,
                'gpu' => null,
                'type' => 'Office'
            ],
            [
                'name' => 'Omen X',
                'price' => 1800000,
                'brand' => 'HP',
                'processor' => 'Intel Core I9',
                'ram size' => 16,
                'gpu' => 'Nvidia GeForce',
                'type' => 'Gaming'
            ],
        ]);
    }
}
