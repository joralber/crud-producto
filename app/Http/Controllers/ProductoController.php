<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Barryvdh\DomPDF\Facade\Pdf; // Importar la clase correcta

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productos=Producto::paginate(5);


        return view('index', compact('productos'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('productos.create');}

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    //     $producos=$request->all();
    //     Producto::create($producos);

    $request->validate([
        'nombre' => 'required',
        'precio'=>'required|numeric'
    ]);
    Producto::create($request->all());

        return redirect()->route('productos.index')->with('success','Producto creado exitosamente');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $producto=Producto::find($id);
        return view('productos.show', compact('producto'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $producto= Producto::find($id);
        return view('productos.edit', compact('producto'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nombre'=>'required',
            'precio'=>'required|numeric'
        ]);

        Producto::find($id)->update($request->all());
        return redirect()->route('productos.index')->with('success', 'Producto Modificado');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Producto::destroy($id);
        return redirect()->route('productos.index')->with('success', 'Producto Eliminado');
        }

        public function generarInformePDF()
        {
            $productos = Producto::all();
            $pdf = PDF::loadView('productos.informe', compact('productos'));
            return $pdf->stream('productos.informe.pdf');
        }

    }
