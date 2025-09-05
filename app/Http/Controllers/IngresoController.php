<?php

namespace App\Http\Controllers;

use App\Models\Ingreso;
use Illuminate\Http\Request;

class IngresoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clientes = Ingreso::all();
        return view('ingresos.index', compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('ingresos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string',
            'apellido' => 'required|string',
            'dpi' => 'required|string',
            'telefono' => 'required|string',
            'correo' => 'required|string',
            'direccion' => 'required|string',
            'edad' => 'required|numeric',            
        ]);

             Ingreso::create([
            'nombre' => $request->nombre,
            'apellido' => $request->apellido,
            'dpi' => $request->dpi,
            'telefono' => $request->telefono,
            'correo' => $request->correo,
            'direccion' => $request->direccion,
            'edad' => $request->edad,
        ]);
        return redirect()->route('ingresos.index')->with('success', 'Ingreso creado exitosamente.');   

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $cliente = Ingreso::find($id);
        return view('ingresos.show', compact('cliente'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ingreso $ingreso)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ingreso $ingreso)
    {
        //
    }
}
