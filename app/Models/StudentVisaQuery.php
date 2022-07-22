<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class StudentVisaQuery extends Model
{
    use HasFactory;

    protected $table = "student_visa_queries";

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
