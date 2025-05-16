<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
class NewsSite extends Model
{
    /**
     * @var array
     */
    protected $fillable = [
        'name',
        'url',
        'language',
        'copyright',
        'is_enable',
    ];
}
