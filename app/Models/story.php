<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class story extends Model
{
	protected $table = 'story';
    protected $fillable = [
        'username', 'datetime', 'message',
    ];
}
