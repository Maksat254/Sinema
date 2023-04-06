<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Booking extends Model
{
    protected $fillable = ['user_id', 'showing_id', 'seat_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function showing()
    {
        return $this->belongsTo(Showing::class);
    }

    public function seat()
    {
        return $this->belongsTo(Seat::class);
    }
}
