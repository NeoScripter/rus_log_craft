<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Gallery extends Model
{
    protected $guarded = ['id'];

    public function images(): HasMany
    {
        return $this->hasMany(Image::class)->where('type', 'image')->orderBy('order', 'asc');
    }

    public function firstImage()
    {
        return $this->hasOne(Image::class)->where('type', 'image')->orderBy('order', 'asc');
    }
}
