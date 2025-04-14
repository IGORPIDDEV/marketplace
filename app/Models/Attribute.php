<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Attribute extends Model
{
    public function translations()
    {
        return $this->hasMany(AttributeTranslation::class);
    }

    public function translation($locale = null)
    {
        return $this->translations()
            ->where('locale', $locale ?? app()->getLocale())
            ->first();
    }
}
