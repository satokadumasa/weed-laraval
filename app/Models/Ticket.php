<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $fillable = [
        'hash',
        'ticket_code',
        'badge_name',
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
}
