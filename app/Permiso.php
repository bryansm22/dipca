<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_permisos
 * @property boolean $insetar
 * @property boolean $borrar
 * @property boolean $actualizar
 * @property boolean $consultar
 * @property boolean $imprimir
 * @property Usuario[] $usuarios
 */
class Permiso extends Model
{
    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_permisos';

    /**
     * @var array
     */
    protected $fillable = ['insetar', 'borrar', 'actualizar', 'consultar', 'imprimir'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function usuarios()
    {
        return $this->hasMany('App\Usuario', 'id_permisos', 'id_permisos');
    }
}
