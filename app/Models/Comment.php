<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'creator',
        'content',
    ];

    public function ticket()
    {
        return $this->belongsTo(Ticket::class);
    }

}

