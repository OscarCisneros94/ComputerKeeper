<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $primaryKey = 'Cod_Cliente';
    protected $table = 'cliente';
    use HasFactory;

    public $timestamps = false;
    protected $fillable = ['Tipo_Cliente', 'Fecha_Registro'];
}
