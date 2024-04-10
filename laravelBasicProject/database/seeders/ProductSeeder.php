<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert(['name' => 'Refrigrator',
                                        'price' => '28000',
                                        'category' => 'fridge',
                                        'description' => 'extreme cooling',
                                        'gallery' => 'data:image/jpeg;base64,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']);
    }
}