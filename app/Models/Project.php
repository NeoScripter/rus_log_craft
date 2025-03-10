<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Project extends Model
{
    /** @use HasFactory<\Database\Factories\ProjectFactory> */
    use HasFactory;

    protected $guarded = ['id'];

    public function plans(): HasMany
    {
        return $this->hasMany(Image::class)->where('type', 'plan')->orderBy('order', 'asc');
    }

    public function images(): HasMany
    {
        return $this->hasMany(Image::class)->where('type', 'image')->orderBy('order', 'asc');
    }

    public function firstImage()
    {
        return $this->hasOne(Image::class)->where('type', 'image')->orderBy('order', 'asc');
    }
}
