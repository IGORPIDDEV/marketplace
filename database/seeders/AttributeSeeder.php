<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Attribute;

class AttributeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Attribute::firstOrCreate([
            'name' => 'brand',
            'type' => 'string',
        ]);

        Attribute::firstOrCreate([
            'name' => 'model',
            'type' => 'string',
        ]);

        Attribute::firstOrCreate([
            'name' => 'year',
            'type' => 'number',
        ]);

        Attribute::firstOrCreate([
            'name' => 'fuel',
            'type' => 'select',
        ]);
    }
}
