<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Categories;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Categories::where('id', 1)
            ->update(['image'=>"storage/images/usb_cable.png"]);
        Categories::where('id', 2)
            ->update(['image'=>"storage/images/ssd.png"]);
        Categories::where('id', 3)
            ->update(['image'=>"storage/images/vaccum.png"]);
        Categories::where('id', 4)
            ->update(['image'=>"storage/images/laptop.png"]);
        Categories::where('id', 5)
            ->update(['image'=>"storage/images/keyboard.png"]);
        Categories::where('id', 6)
            ->update(['image'=>"storage/images/mouse.png"]);
        Categories::where('id', 7)
            ->update(['image'=>"storage/images/cpu.png"]);
        Categories::where('id', 8)
            ->update(['image'=>"storage/images/washing_machine.png"]);
        Categories::where('id', 10)
            ->update(['image'=>"storage/images/air_conditioner.png"]);
        Categories::where('id', 11)
            ->update(['image'=>"storage/images/water_filter.png"]);
    }
}