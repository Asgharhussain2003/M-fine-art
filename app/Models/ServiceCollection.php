<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceCollection extends Model {
    protected $fillable = [
        'first_name', 'last_name', 'expected_date', 'house_size', 'time',
        'email', 'phone', 'city', 'amount', 'paint_type'
    ];
}

