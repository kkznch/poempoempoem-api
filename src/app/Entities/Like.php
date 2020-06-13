<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Like
 * @package App\Entities
 */
class Like extends Model
{
    /**
     * @var string[]
     */
    protected $fillable = [
        'poem_id',
        'user_id',
    ];
}
