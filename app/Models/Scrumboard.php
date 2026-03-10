<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Scrumboard extends Model
{
    protected $fillable = [
        'description',
        'owner',
        'title',
    ];

    public function tickets()
    {
        return $this->hasMany(Ticket::class);
    }
}
