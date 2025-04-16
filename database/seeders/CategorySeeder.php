<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\CategoryTranslation;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'slug' => 'vehicles',
                'translations' => [
                    'en' => 'Vehicles',
                    'uk' => 'Транспорт',
                ],
            ],
            [
                'slug' => 'electronics',
                'translations' => [
                    'en' => 'Electronics',
                    'uk' => 'Електроніка',
                ],
            ],
            [
                'slug' => 'furniture',
                'translations' => [
                    'en' => 'Furniture',
                    'uk' => 'Меблі',
                ],
            ],
        ];

        foreach ($categories as $data) {
            $category = Category::create(['slug' => $data['slug']]);

            foreach ($data['translations'] as $locale => $name) {
                CategoryTranslation::create([
                    'category_id' => $category->id,
                    'locale' => $locale,
                    'name' => $name,
                ]);
            }
        }
    }
}
