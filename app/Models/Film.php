<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    protected $fillable = ['title', 'description', 'poster_path'];

    public function showings()
    {
        return $this->hasMany(Showing::class);
    }
}
