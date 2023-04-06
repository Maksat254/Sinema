<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Screens extends Model

{
    protected $fillable = ['name', 'cinema_id'];

    public function cinema()
    {
        return $this->belongsTo(Cinema::class);
    }

    public function showings()
    {
        return $this->hasMany(Showing::class);
    }

    public function seats()
    {
        return $this->hasMany(Seat::class);
    }

}
