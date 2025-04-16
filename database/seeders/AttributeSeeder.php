<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Attribute;
use App\Models\AttributeTranslation;

class AttributeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $attributes = [
            [
                'type' => 'string',
                'translations' => [
                    'en' => 'Brand',
                    'uk' => 'Бренд',
                ],
            ],
            [
                'type' => 'number',
                'translations' => [
                    'en' => 'Year',
                    'uk' => 'Рік',
                ],
            ],
            [
                'type' => 'select',
                'translations' => [
                    'en' => 'Fuel Type',
                    'uk' => 'Тип пального',
                ],
            ],
        ];

        foreach ($attributes as $data) {
            $attribute = Attribute::create([
                'type' => $data['type'],
            ]);

            foreach ($data['translations'] as $locale => $name) {
                AttributeTranslation::create([
                    'attribute_id' => $attribute->id,
                    'locale' => $locale,
                    'name' => $name,
                ]);
            }
        }
    }
}
