<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Deposito;

class DepositoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(string $id, string $id2, string $nombre)
    {
        $empleado = $id;
        $afiliado = $id2;
        $nafiliado = $nombre;
        
        $datosDeposito = Deposito::where('codafiliado', $afiliado)->get();
        return view('deposito.index', compact('datosDeposito', 'empleado', 'afiliado', 'nafiliado'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(string $id, string $id2, string $nombre)
    {
        $codafiliado = $id2;
        $codempleado = $id;
        $nomafiliado = $nombre;
        return view('deposito.create')->with('codafiliado',$codafiliado)->with('codempleado',$codempleado)->with('nomafiliado',$nomafiliado);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $deposito = new Deposito();
        $deposito->codempleado = $request->get('codempleado');
        $deposito->codafiliado = $request->get('codafiliado');
        $deposito->nombreafiliado = $request->get('nombreafiliado');
        $deposito->fecha = $request->get('fecha');
        $deposito->cantidad = $request->get('cantidad');
        $deposito->save();

        return redirect('empleado');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $deposito=Deposito::find($id);
        $deposito->codempleado = $request->get('codempleado');
        $deposito->codafiliado = $request->get('codafiliado');
        $deposito->nombreafiliado = $request->get('nombreafiliado');
        $deposito->fecha = $request->get('fecha');
        $deposito->cantidad = $request->get('cantidad');
        $deposito->save();

        return redirect('empleado');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
