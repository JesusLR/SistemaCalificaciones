<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Materiado
 *
 * @property $id
 * @property $matricula
 * @property $u1
 * @property $u2
 * @property $u3
 * @property $u4
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Materiado extends Model
{
    
    static $rules = [
		'matricula' => 'required',
		'u1' => 'required',
		'u2' => 'required',
		'u3' => 'required',
		'u4' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['matricula','u1','u2','u3','u4'];



}
