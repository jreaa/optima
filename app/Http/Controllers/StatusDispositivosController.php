<?php

namespace App\Http\Controllers;
use App\Models\Dispositivos;
use Illuminate\Http\Request;

class StatusDispositivosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\StatusDispositivos  $statusDispositivos
     * @return \Illuminate\Http\Response
     */
    public function show(StatusDispositivos $statusDispositivos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\StatusDispositivos  $statusDispositivos
     * @return \Illuminate\Http\Response
     */
    public function edit(StatusDispositivos $statusDispositivos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\StatusDispositivos  $statusDispositivos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, StatusDispositivos $statusDispositivos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\StatusDispositivos  $statusDispositivos
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $device = Dispositivos::find($id);
        
        if($device->estado == 0){
            $device->update([
                'estado' => 1
            ]);
            
        }else{
            $device->update([
                'estado' => 0
            ]);
        }
        return redirect()->back();
    }
}
