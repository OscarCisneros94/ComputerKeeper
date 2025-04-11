<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClienteParticular extends Model
{
    protected $primaryKey = 'Cod_Cliente_Part';
    protected $table = 'cliente_particular';
    use HasFactory;

    public $timestamps = false;
    protected $fillable =
        ['Cod_Cliente_Part','Nombres', 'Apellidos','Direccion', 'Telefono', 'Num_CC', 'Fecha_Nac', 'Correo'];

}
