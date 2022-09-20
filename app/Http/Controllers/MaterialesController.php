<?php

namespace App\Http\Controllers;

use App\Models\Materiales;
use Illuminate\Http\Request;

class MaterialesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $materiales = Materiales::paginate(12);
        return view('materiales.index', compact('materiales'));
    }

    
    public function create()
    {
        //
        return view('materiales.create');
    }

    
    public function store(Request $request)
    {
        //
        $this->validate($request,[
            'nombre'=>'required|min:3',
            'stock'=>'required|integer|min:0'
        ]);

        $materiales = Materiales::create([
            'nombre'=>$request->nombre, 
            'stock'=>$request->stock
        ]);
        $notification='Material creado correctamente';
        return redirect()->route('materiales.create')->with(compact('notification'));
    }

    
    public function show(Materiales $materiales)
    {
        //
    }

    public function edit($id)
    {
        $material=Materiales::findOrFail($id);
        return view('materiales.edit', compact('material'));
    }

    
    public function update(Request $request, $id)
    {
        //
        $this->validate($request,[
            'nombre'=>'required|min:3',
            'stock'=>'required|integer|min:0'
        ]);
        
        $materiales= Materiales::find($id);
        $materiales->nombre=$request->nombre;
        $materiales->stock=$request->stock;

        $materiales->save();
        $notification='Actualizado correctamente';
        return redirect()->route('index.materiales')->with(compact('notification'));
    }

   
    public function destroy($id)
    {
        //
        $materiales = Materiales::findOrFail($id);
        $materialName = $materiales->nombre; //Obtiene el nombre del material
        $materiales->delete();
        $notification = "El material $materialName se eliminó corectamente";
        //return "Eliminado";
        return redirect()->route("index.materiales")->with(compact('notification'));
    }

    public function createStock($id){
        $materiales = Materiales::findOrFail($id);
        return view('materiales.create_stock', compact('materiales'));
    }
    public function diminishView($id){ //Función que devuelve a la vista de decrementar materiales
        $materiales = Materiales::findOrFail($id);
        return view('materiales.diminish_stock', compact('materiales'));
    }

    public function diminishStock(Request $request, $id){
        $this->validate($request,[
            'stock'=>'required|integer|min:0'
        ]);
        
        $materiales= Materiales::find($id);
        $nameMaterial = $materiales->nombre;
        $materiales->stock=$materiales->stock-$request->stock;

        $materiales->save();
        $notification="Se quitó $request->stock unidades correctamente al Material $nameMaterial";
        return redirect()->route('index.materiales')->with(compact('notification'));
    }

    public function storeStock(Request $request, $id){
        $this->validate($request,[
            'stock'=>'required|integer|min:0'
        ]);
        
        $materiales= Materiales::find($id);
        $materiales->stock=$materiales->stock+$request->stock;

        $materiales->save();
        $notification='Añadido correctamente al Stock';
        return redirect()->route('index.materiales')->with(compact('notification'));
    }
}
