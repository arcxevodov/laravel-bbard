<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['bb_id', 'user_id', 'title', 'content'];

    public function bb()
    {
        return $this->belongsTo(Bb::class);
    }
}
