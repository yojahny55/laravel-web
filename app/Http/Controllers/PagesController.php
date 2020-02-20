<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class PagesController extends Controller
{

    public function index(){

        $notas = App\Nota::all();
        return view('welcome', compact('notas'));
    }
    public function detalles($id = null){

        $nota = App\Nota::findOrFail($id);
        return view('notas.detalles', compact('nota'));
    }

    //Agragar

    public function agregar(Request $request){
        $notaNueva = new App\Nota;

        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
        ]);

        $notaNueva->nombre = $request->nombre;
        $notaNueva->descripcion = $request->descripcion;
        $notaNueva->save();

        return back()->with('mensaje','Nota Agregada!');



    }

    //Actualizar Nota
    public function Actualizar($id)
    {
        $nota = App\Nota::findOrFail($id);
        return view('notas.actualizar', compact('nota'));
    }

    public function update($id, Request $request)
    {
        $nota = App\Nota::findOrFail($id);
        $nota->nombre = $request->nombre;
        $nota->descripcion = $request->descripcion;

        $nota->save();
        return back()->with('mensaje','Nota Editada Correctamente!');
    }

    //Eliminar
    public function eliminar($id){

        $nota = App\Nota::findOrFail($id);
        $nota->delete();
        return back()->with('mensaje','Nota Eliminada Correctamente!');
    }

   public function foto() {
        return view('fotos');

    }
   public function blog() {
        return view('blog');

    }

   public function about($nombre = null) {

        $equipo = ['Juanito','Pedrito', 'Marijuana', 'Regaeton'];

          //  return view('nosotros',['equipo'=>$equipo]);

          return view('nosotros',compact('equipo','nombre'));

        }


    //
}
