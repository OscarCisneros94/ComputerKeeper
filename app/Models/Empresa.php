<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    protected $primaryKey = 'Cod_Empresa';
    protected $table = 'empresa';
    use HasFactory;

    public $timestamps = false;
    protected $fillable =
        ['Nombre', 'Num_NIT', 'Direccion', 'Telefono', 'Fecha_Contrato'];

        public function clienteempresarial(){
            return $this->hasMany('App\Models\ClienteEmpresarial');
            }
}