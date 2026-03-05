<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BlockedAccount extends Model
{
    protected $fillable = [
        'email',
        'blocked_at',
    ];

    protected function casts(): array
    {
        return [
            'blocked_at' => 'datetime',
        ];
    }
}
