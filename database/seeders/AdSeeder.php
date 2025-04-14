<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Ad;
use App\Models\User;
use App\Models\Category;

class AdSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::first();
        $category = Category::where('name', 'Vehicles')->first();

        Ad::factory()->count(10)->create([
            'user_id' => $user->id,
            'category_id' => $category ? $category->id : null,
        ]);
    }
}
