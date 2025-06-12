<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pref extends Model
{
    protected $fillable = [
        'pref',
    ];
    public function ticket()
    {
        return $this->belongsTo(Ticket::class, 'pref_id', 'id');
    }
}
