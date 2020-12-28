<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Arriendo;
use App\Models\Auto;
use App\Models\Cliente;

class ArriendosController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $arriendos = Arriendo::all();
        $autos = Auto::all();
        $clientes = Cliente::all();
        return view('arriendos.index',compact('arriendos','autos','clientes'));
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
        $arriendos = new Arriendo();
        $arriendos->origen = $request->recogida;
        $arriendos->destino = $request->entrega;
        $arriendos->fecha_origen = $request->fechar;
        $arriendos->fecha_destino = $request->fechae;
        $arriendos->auto_id = $request->auto;
        $arriendos->cliente_id = $request->cliente;
        $arriendos->save();
        return redirect()->route('arriendos.index');
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
