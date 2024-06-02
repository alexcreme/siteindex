<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Site extends Model
{
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
}
