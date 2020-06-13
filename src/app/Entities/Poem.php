<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Poem
 * @package App\Entities
 */
class Poem extends Model
{
    /**
     * @var string[]
     */
    protected $fillable = [
        'image',
        'text',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function likes()
    {
        return $this->hasMany(Like::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
