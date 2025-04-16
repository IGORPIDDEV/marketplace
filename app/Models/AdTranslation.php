<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AdTranslation extends Model
{
    protected $fillable = ['ad_id', 'locale', 'title', 'description'];

    public function ad()
    {
        return $this->belongsTo(Ad::class);
    }
}
