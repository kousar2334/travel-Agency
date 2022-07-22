<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TouristVisaQuery extends Model
{
    use HasFactory;

    protected $table = "tourist_visa_queries";

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
