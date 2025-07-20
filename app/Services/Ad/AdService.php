<?php

namespace App\Services\Ad;

use App\DTO\Ad\AdData;
use App\Models\Ad;
use App\Models\AdTranslation;
use Illuminate\Support\Facades\DB;

class AdService
{
    public function create(AdData $data): Ad
    {
        return DB::transaction(function () use ($data) {
            $ad = Ad::create([
                'user_id' => auth()->id(),
                'category_id' => $data->categoryId,
                'price' => $data->price,
                'location' => $data->location,
                'is_published' => true,
            ]);

            AdTranslation::create([
                'ad_id' => $ad->id,
                'locale' => $data->locale,
                'title' => $data->title,
                'description' => $data->description,
            ]);

            foreach ($data->attributes as $attributeId => $value) {
                $ad->attributes()->create([
                    'attribute_id' => $attributeId,
                    'value' => $value,
                ]);
            }

            return $ad;
        });
    }

    public function update(AdData $data, Ad $ad): Ad
    {
        return DB::transaction(function () use ($data, $ad) {
            $ad->update([
                'category_id' => $data->categoryId,
                'price' => $data->price,
                'location' => $data->location,
            ]);

            $translation = $ad->translations()->updateOrCreate(
                ['locale' => $data->locale],
                [
                    'title' => $data->title,
                    'description' => $data->description,
                ]
            );

            $ad->attributes()->delete();

            foreach ($data->attributes as $attributeId => $value) {
                $ad->attributes()->create([
                    'attribute_id' => $attributeId,
                    'value' => $value,
                ]);
            }

            return $ad;
        });
    }

}
