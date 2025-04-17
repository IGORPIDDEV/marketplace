<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ad extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'category_id',
        'price',
        'location',
        'is_published',
    ];

    public function translations()
    {
        return $this->hasMany(AdTranslation::class);
    }

    public function translation($locale = null)
    {
        return $this->translations()
            ->where('locale', $locale ?? app()->getLocale())
            ->first();
    }

    public function category() {
        return $this->belongsTo(Category::class);
    }
    public function attributes() {
        return $this->hasMany(AdAttribute::class);
    }
}
