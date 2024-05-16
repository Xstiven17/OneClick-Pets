<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnalisisCliente extends Model
{
    use HasFactory;

    protected $table = 'analisis_clientes';

    protected $fillable = ['Usuario', 'Tiempo_online', 'Tiempo_offline'];
}
