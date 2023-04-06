<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seats extends Model
{
    protected $fillable = ['name', 'screen_id'];

    public function screen()
    {
        return $this->belongsTo(Screen::class);
    }

    public function booking()
    {
        return $this->hasOne(Booking::class);
    }}
