<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Local extends Model
{
    use HasFactory;
    protected $table = 'localizazao';
    protected $fillable = [
        'ip',
        'countryName',
        'regionName',
        'cityName',
        'zipCode',
        'latitude',
        'longitude',
    ];
}
