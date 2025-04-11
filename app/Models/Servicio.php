<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    use HasFactory;
    protected $primaryKey = 'Cod_Servicio';
    protected $table = 'servicio';
    public $timestamps = false;
    protected $fillable =
        ['Fecha','Cod_Equipo', 'Cod_Tecnico', 'Estado', 'Clasificacion', 'Categoria', 'Detalle_Servicio', 'Observaciones']; 
    
        public function tecnico()
        {
            return $this->belongsTo('App\Models\Tecnico', 'Cod_Tecnico');
        }
        
}
