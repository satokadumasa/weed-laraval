<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $fillable = [
        'hash',
        'ticket_code',
        'badge_name',
        'first_name',
        'family_name',
        'age',
        'gender',
        'email',
        'post_code',
        'pref_id',
        'address',
        'building_name',
        'room_number',
        'description',
    ];
    public function status()
    {
        return $this->hasMany(Status::class, 'id', 'status_id');
    }
    public function pref()
    {
        return $this->hasMany(Pref::class, 'id', 'pref_id');
    }
}
