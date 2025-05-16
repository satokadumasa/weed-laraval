<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
class User extends Model
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
