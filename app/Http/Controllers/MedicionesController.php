<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Inertia\Inertia;

use App\Models\Mediciones;
use App\Models\Cliente;

use App\Models\Estado;
use Illuminate\Http\Request;

class MedicionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mediciones = DB::table('mediciones')
        ->leftJoin('dispositivos', 'mediciones.id_dispositivo', '=', 'dispositivos.id')
        ->select("mediciones.*", "dispositivos.nombre_dispositivo")
        ->get();

        $dispositivos =  DB::table('dispositivos')
        ->leftJoin('clientes', 'dispositivos.id_cliente', '=', 'clientes.id')
        ->select("dispositivos.*", "clientes.nombre_cliente")
        ->get();

        $estados = Estado::latest()->where('nombre_estado','TIPO_GRAFICO')->get();

        $estados2 = Estado::latest()->where('nombre_estado','TIPO_DATO')->get();
    /*
        $dispositivos = Dispositivos::latest()->get();
    */
        return Inertia::render('Mediciones/Index', [
            'mediciones' => $mediciones,
            'dispositivos' => $dispositivos,
            'estados'      => $estados,
            'estados2'     => $estados2
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
       
        Mediciones::create([
            'nombre_dato_bd' => $request->nombre_dato_bd,
            'nombre_medicion'        => $request->nombre_medicion,
            'valor_ingenieria'            => $request->valor_ingenieria,
            'divisor'              => $request->divisor,
            'orden'                => $request->orden,
            'id_dispositivo'       => $request->id_dispositivo,
            'tipo_grafico'         => $request->tipo_grafico,
            'tipo_dato'         => $request->id_tipo_dato,
        ]);

        return redirect()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mediciones  $mediciones
     * @return \Illuminate\Http\Response
     */
    public function show(Mediciones $mediciones)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mediciones  $mediciones
     * @return \Illuminate\Http\Response
     */
    public function edit(Mediciones $mediciones)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mediciones  $mediciones
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $mediciones = Mediciones::find($id);


        $mediciones->update([
            'nombre_dato_bd'    => $request->nombre_dato_bd,
            'nombre_medicion'      => $request->nombre_medicion,
            'valor_ingenieria'      => $request->valor_ingenieria,
            'divisor'              => $request->divisor,
            'orden'                => $request->orden,
            'id_dispositivo'       => $request->id_dispositivo,
            'tipo_grafico'         => $request->tipo_grafico,
            'tipo_dato'         => $request->id_tipo_dato,
        ]);

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mediciones  $mediciones
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $medicion =  Mediciones::find($id);

       $medicion->delete();

       return redirect()->back();
    }
}
