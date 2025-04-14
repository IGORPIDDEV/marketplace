<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Ad;
use App\Models\User;
use App\Models\Category;

class AdSeeder extends Seeder
{
    public function run(): void
    {
        $user = User::first();

        $category = Category::whereHas('translations', fn ($q) =>
            $q->where('locale', 'en')->where('name', 'Vehicles')
        )->first();

        Ad::factory()->count(10)->create([
            'user_id' => $user->id,
            'category_id' => $category?->id,
        ]);
    }
}
