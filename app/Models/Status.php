<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $fillable = [
        'status',
    ];
    public function ticket()
    {
        return $this->belongsTo(Ticket::class, 'status_id', 'id');
    }
}
