<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;

class Tecnico extends Model
{
    protected $primaryKey = 'Cod_Tecnico';
    protected $table = 'tecnico';
    use HasFactory, HasRoles;

    public $timestamps = false;
    protected $fillable =
        ['Nombres', 'Apellidos', 'Num_CC', 'Fecha_Ingreso', 'Direccion', 'Telefono', 'Fecha_Nac'];

    protected $guard_name = 'web';

        public function servicio(){
            return $this->hasMany('App\Models\Servicio');
            }
}
