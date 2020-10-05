<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Season extends Model
{
    use HasFactory;

    public function media()
    {
        return $this->belongsTo(Media::class);
    }

    public function profile()
    {
        return $this->belongsTo(Profile::class);
    }
}