<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Filme extends Model
{
    public $timestamps = false;
    protected $fillable = ['titulo', 'genero', 'diretor', 'duracao'];
}
