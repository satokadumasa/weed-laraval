<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
class User extends Model
{
    /**
     * @var array
     */
    protected $fillable = [
        'title',
        'link',
        'description',
        'pub_date',
        'image',
        'img_url',
        'is_delete',
    ];
}
