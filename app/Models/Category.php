<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function translations()
    {
        return $this->hasMany(CategoryTranslation::class);
    }

    public function translation($locale = null)
    {
        return $this->translations()
            ->where('locale', $locale ?? app()->getLocale())
            ->first();
    }
}
