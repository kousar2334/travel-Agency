<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class FlightBooking extends Model
{
    use HasFactory;

    protected $table = "flight_bookings";

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
