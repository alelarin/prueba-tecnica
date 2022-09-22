<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Geolocalizacion extends Model
{
    static $rules = [
		'telefono' => 'required|regex: /^(7|6)\d{7}$/g', //expreson regular para validar
		'path' => 'required',
		'latitud' => 'required',
		'longitud' => 'required',
    ];

    protected $table = "geolocalizaciones";

    public $timestamps = false;


   // protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['telefono','path','latitud','longitud'];
}
