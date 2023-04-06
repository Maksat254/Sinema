<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cinema extends Model
{
    protected $fillable = ['name', 'address'];

    public function screens()
    {
        return $this->hasMany(Screen::class);
    }
}
