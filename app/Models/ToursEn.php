<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ToursEn extends Model
{
    use HasFactory;
    protected $table = 'tours_en';
    protected $fillable = [
        'nome',
        'descricao',
        'book_now',
        'included',
        'other_things',
    ];
}
