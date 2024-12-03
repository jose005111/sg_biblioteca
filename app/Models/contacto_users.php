<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contacto_users extends Model
{
    use HasFactory;

    protected $table = "contacto_users";
    
    protected $fillable = [
    'id_tipo_contacto',
    'terminal'
];
}

