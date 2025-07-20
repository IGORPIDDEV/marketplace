<?php


namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AdResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'title' => $this->translation()?->title,
            'description' => $this->translation()?->description,
            'price' => $this->price,
            'location' => $this->location,
            'category' => [
                'id' => $this->category?->id,
                'name' => $this->category?->translation()?->name,
            ],
            'attributes' => $this->attributes->map(fn ($attr) => [
                'id' => $attr->attribute_id,
                'name' => $attr->attribute?->translation()?->name,
                'value' => $attr->value,
            ])->values(),
            'created_at' => $this->created_at,
        ];
    }
}
