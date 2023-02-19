<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ToursEs extends Model
{
    use HasFactory;
    protected $table = 'tours_es';
    protected $fillable = [
        'nome',
        'descricao',
        'book_now',
        'included',
        'other_things',
    ];
}
