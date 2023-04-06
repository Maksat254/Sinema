<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Showings extends Model
{
    protected $fillable = ['start_time', 'end_time', 'screen_id', 'film_id'];

    public function screen()
    {
        return $this->belongsTo(Screen::class);
    }

    public function film()
    {
        return $this->belongsTo(Film::class);
    }

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}
