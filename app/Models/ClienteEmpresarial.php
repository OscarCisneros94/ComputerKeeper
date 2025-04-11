<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClienteEmpresarial extends Model
{
    protected $primaryKey = 'Cod_Cliente_Emp';
    protected $table = 'cliente_empresarial';
    use HasFactory;

    public $timestamps = false;
    protected $fillable =
        ['Cod_Cliente_Emp','Cod_Empresa', 'Nombres', 'Apellidos', 'Cargo', 'Direccion', 'Telefono', 'Num_CC', 'Fecha_Nac', 'Correo'];

        public function empresa()
        {
            return $this->belongsTo('App\Models\Empresa', 'Cod_Empresa');
        }
}

