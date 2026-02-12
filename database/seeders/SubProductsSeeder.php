<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SubProducts;

class SubProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        SubProducts::create([
            'name' => 'USB Cable',
            'price' => 199,
        ]);
    }
}
