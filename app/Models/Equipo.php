<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    protected $primaryKey = 'Cod_Equipo';
    protected $table = 'equipo';
    use HasFactory;

    public $timestamps = false;
    protected $fillable =
        ['Cod_Cliente','Nombre_equipo', 'Marca', 'Modelo', 'Serial', 'Nombre_SO', 'Procesador', 'Memoria_RAM', 'Tipo_Sistema', 'Tipo_Equipo','Observaciones'];
}