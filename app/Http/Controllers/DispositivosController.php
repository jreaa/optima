<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Inertia\Inertia;
use App\Models\Dispositivos;
use App\Models\Cliente;
use Illuminate\Http\Request;

class DispositivosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $dispositivos = DB::table('dispositivos')
            ->leftJoin('clientes', 'dispositivos.id_cliente', '=', 'clientes.id')
            ->select('dispositivos.*', 'clientes.nombre_cliente')
            ->get();

        $clientes = Cliente::latest()->get();
 /*
        $dispositivos = Dispositivos::latest()->get();
*/
        return Inertia::render('Dispositivos/Index', [
            'devices' => $dispositivos,
            'clientes' => $clientes
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
        Dispositivos::create([
            'id_cliente' => $request->nombre_cliente,
            'nombre_bd' => $request->nombre_bd,
            'version'   => $request->version,
            'nombre_dispositivo' => $request->nombre_dispositivo
        ]);

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dispositivos  $dispositivos
     * @return \Illuminate\Http\Response
     */
    public function show(Dispositivos $dispositivos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dispositivos  $dispositivos
     * @return \Illuminate\Http\Response
     */
    public function edit(Dispositivos $dispositivos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Dispositivos  $dispositivos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $dispositivos = Dispositivos::find($id);

       
        if (!$request->nombre_cliente == null) {
            $dispositivos->update([
                'id_cliente' => $request->nombre_cliente,
                'nombre_bd' => $request->nombre_bd,
                'version'   => $request->version,
                'nombre_dispositivo' => $request->nombre_dispositivo
            ]);
        }else {
            $dispositivos->update([
                'nombre_bd' => $request->nombre_bd,
                'version'   => $request->version,
                'nombre_dispositivo' => $request->nombre_dispositivo
            ]);
        }
    
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dispositivos  $dispositivos
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dispositivos = Dispositivos::find($id);
        $dispositivos->delete();

        return redirect()->back();
    }
}
