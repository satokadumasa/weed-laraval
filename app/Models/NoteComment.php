<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NoteComment extends Model
{
    protected $fillable = [
        'user_id',
        'note_id',
        'hash',
        'body',
        'deleted_at',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function note()
    {
        return $this->belongsTo(Note::class);
    }
}
