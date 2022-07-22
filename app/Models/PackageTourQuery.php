<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PackageTourQuery extends Model
{
    use HasFactory;

    protected $table = "package_tour_query";

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
