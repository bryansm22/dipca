<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

/**
 * @property int $id_usuario
 * @property int $id_permisos
 * @property string $primer_nombre
 * @property string $primer_apellido
 * @property string $usuario
 * @property string $contraseña
 * @property boolean $administrador
 * @property Permiso $permiso
 */
class Usuario extends Model implements AuthenticatableContract
{
    use Authenticatable;
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'usuario';

    /**
     * The primary key for the model.
     * 
     * @var string
     */
    protected $primaryKey = 'id_usuario';

    /**
     * @var array
     */
    protected $fillable = ['id_permisos', 'primer_nombre', 'primer_apellido', 'usuario', 'contraseña', 'administrador'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function permiso()
    {
        return $this->belongsTo('App\Permiso', 'id_permisos', 'id_permisos');
    }
}
