<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Ticket extends Model
{
    protected $fillable = [
        'description',
        'owner',
        'priority',
        'title',
        'type',


    ];

    public function scrumBoard()
    {
        return $this->belongsTo(Scrumboard::class);
    }

    public function comment()
    {
        return $this->hasMany(Comment::class);
    }
}
