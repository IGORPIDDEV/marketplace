<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $vehicles = Category::firstOrCreate(['name' => 'Vehicles']);
        $electronics = Category::firstOrCreate(['name' => 'Electronics']);
        $furniture = Category::firstOrCreate(['name' => 'Furniture']);

        Category::firstOrCreate([
            'name' => 'Cars',
            'parent_id' => $vehicles->id,
        ]);

        Category::firstOrCreate([
            'name' => 'Motorcycles',
            'parent_id' => $vehicles->id,
        ]);
    }
}
