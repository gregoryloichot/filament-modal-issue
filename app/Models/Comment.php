<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Comment extends Model
{
    protected $fillable = [
        'title',
        'body',
        'article_id'
    ];

    public function comments(): BelongsTo
    {
        return $this->belongsTo(Article::class);
    }
}
