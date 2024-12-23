<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PageComment extends Model
{
    protected $fillable = [
        'user_id',
        'page_id',
        'title',
        'detail',
    ];
}
