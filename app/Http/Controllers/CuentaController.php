<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;


use App\Models\User;
use App\Models\Estado;
use App\Models\Cliente;

use Inertia\Inertia;
use Illuminate\Http\Request;

class CuentaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $users = DB::table('users')
            ->leftjoin('estados', 'users.id_perfil', '=', 'estados.id_mostrar')
            ->where('estados.nombre_estado', '=', 'TIPO_USUARIO')
            ->leftjoin('clientes', 'users.id_cliente', '=', 'clientes.id')
            ->select('users.*', 'estados.estado_mostrar', 'clientes.nombre_cliente')
            ->get();

        $clientes = Cliente::latest()->get();

        $estados = Estado::latest()->where('estados.nombre_estado', '=', 'TIPO_USUARIO')->get();
        

        return Inertia::render('Cuentas/Index', [
            'users'   => $users,
            'clientes' => $clientes,
            'estados'  => $estados
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
        User::create([
            'name' => $request->name,
            'lastname' => $request->lastname,
            'phone'   => $request->phone,
            'email' => $request->mail,
            'username' => $request->usuario,
            'password' => bcrypt($request->usuario),
            'id_cliente' => $request->id_cliente,
            'id_perfil'  => $request->id_perfil,
        ]);

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $cuenta = User::find($id);


        if($request->id_perfil == NULL and $request->id_cliente == NULL){
          
            $cuenta->update([
                'name' => $request->name,
                'lastname' => $request->lastname,
                'phone'   => $request->phone,
                'email' => $request->mail,
                'username' => $request->usuario,
            ]);

        }elseif($request->id_cliente == NULL ){
           
            $cuenta->update([
                'name' => $request->name,
                'lastname' => $request->lastname,
                'phone'   => $request->phone,
                'email' => $request->mail,
                'username' => $request->usuario,
                'id_perfil'  => $request->id_perfil,
            ]);
        }elseif($request->id_perfil == NULL){
            
            $cuenta->update([
                'name' => $request->name,
                'lastname' => $request->lastname,
                'phone'   => $request->phone,
                'email' => $request->mail,
                'username' => $request->usuario,
                'id_cliente' => $request->id_cliente,
            ]);
            
        }elseif($request->id_perfil != NULL && $request->id_cliente != NULL ){
            
            $cuenta->update([
                'name' => $request->name,
                'lastname' => $request->lastname,
                'phone'   => $request->phone,
                'email' => $request->mail,
                'username' => $request->usuario,
                'id_cliente' => $request->id_cliente,
                'id_perfil'  => $request->id_perfil,
            ]);
        }
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cuenta = User::find($id);

        $cuenta->delete();

        return redirect()->back();
    }
}
