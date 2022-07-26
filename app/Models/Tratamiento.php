<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tratamiento
 *
 * @property $id
 * @property $empleado_id
 * @property $medicamento_id
 * @property $Nombre
 * @property $Descripcion
 * @property $FechaInicio
 * @property $FechaFinal
 * @property $CitasAgendadas
 * @property $CitasAsistidas
 * @property $created_at
 * @property $updated_at
 *
 * @property Empleado $empleado
 * @property Medicamento $medicamento
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Tratamiento extends Model
{
    
    static $rules = [
		'empleado_id' => 'required',
		'medicamento_id' => 'required',
		'Nombre' => 'required',
		'Descripcion' => 'required',
		'FechaInicio' => 'required',
		'FechaFinal' => 'required',
		'CitasAgendadas' => 'required',
		'CitasAsistidas' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['empleado_id','medicamento_id','Nombre','Descripcion','FechaInicio','FechaFinal','CitasAgendadas','CitasAsistidas'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function empleado()
    {
        return $this->hasOne('App\Models\Empleado', 'id', 'empleado_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function medicamento()
    {
        return $this->hasOne('App\Models\Medicamento', 'id', 'medicamento_id');
    }
    

}
