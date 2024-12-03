<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class endereco_user extends Model
{
    use HasFactory;

    protected $table = 'ende_users';

    protected $fillabel = [

        'id_user',
        'bairro',
        'rua',
        'casa'
    ];
}
