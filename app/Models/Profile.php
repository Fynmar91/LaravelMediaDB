<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    public function season()
    {
        return $this->hasOne(Season::class);
    }

    public function author()
    {
        return $this->belongsTo(Author::class);
    }
}