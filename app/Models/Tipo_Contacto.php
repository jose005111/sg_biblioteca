<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipo_Contacto extends Model
{
    use HasFactory;
    protected $table = 'tipo_contacto';

    protected $fillabel = [

        'descricao',

    ];
}