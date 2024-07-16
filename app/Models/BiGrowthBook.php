<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BiGrowthBook extends Model
{
    use HasFactory;
    protected $fillable = [
        'client_name',
        'client_email',
        'client_country_code',
        'client_phone',
        'client_country',
        'bookType',
        'government',
        'city',
        'detailed_address',
        'receiving_time',
        'copies_number',
    ];
}
