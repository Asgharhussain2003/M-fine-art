<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    use HasFactory;

    protected $table = 'feedbacks'; // Ensure correct table name

    protected $fillable = [
        'name',
        'email',
        'message',
        'photo',
        'rating',
        'is_approved',
    ];
}
