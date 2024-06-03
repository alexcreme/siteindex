<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\Image\Enums\Fit;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Site extends Model implements HasMedia
{
    use InteractsWithMedia;

    protected $fillable = [
        'name',
        'category_id',
        'description',
        'url',
        'approved',
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('site');
    }

    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('featured')
            ->fit(FIT::Crop, 500, 500)
            ->performOnCollections('webpage');


    }
}
