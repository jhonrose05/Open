<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Inversion
 *
 * @property $id
 * @property $idUser
 * @property $valInversion
 * @property $rentabilidad
 * @property $numEstado
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Inversion extends Model
{
    
    static $rules = [
		'idUser' => 'required',
		'valInversion' => 'required',
		'rentabilidad' => 'required',
		'numEstado' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['idUser','valInversion','rentabilidad','numEstado'];



}
