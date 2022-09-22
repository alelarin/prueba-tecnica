<?php

namespace App\Http\Controllers;

use App\Models\Geolocalizacion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GeolocalizacionController extends Controller
{
    public function index()
    {

        //$data = Geolocalizacion::all();
        $data = DB::table('geolocalizaciones')->get();
        return view('geolocalizacion.index', compact('data'));
    }
    public function create()
    {
      //  $data = new Geolocalizacion();
        //return view('geolocalizacion.create', compact('data'));
        return view('geolocalizacion.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $geolocalizacion = new Geolocalizacion;
        $geolocalizacion->telefono=$request->input('telefono');
        $geolocalizacion->path=$request->input('path');
        $geolocalizacion->latitud=$request->input('latitud');
        $geolocalizacion->longitud=$request->input('longitud');
        $geolocalizacion->save();
        return redirect()->route('geolocalizacion')
        ->with('success', 'Registro creado exitosamente.');

    }
}

