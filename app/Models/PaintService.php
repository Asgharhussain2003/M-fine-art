<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaintService extends Model
{
    use HasFactory;

    protected $fillable = [
    'category_name',
    'color_name',
    'place',
    'service_date',
    'service_time',
    'amount',
    'advance',
];

}
