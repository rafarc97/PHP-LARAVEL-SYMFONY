<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; /* Para poder usar la clase DB */

class FrutaController extends Controller
{
    public function index(){
        /* Sacamos los registros de la tabla frutas qu devuelve un array de objetos */
        $frutas = DB::table('frutas')
                ->orderBy('id','desc')
                ->get();

        return view('fruta.index',[
            'frutas' => $frutas
        ]);
    }

    public function detail($id){
        /* Trae un array de objetos con get */
        /* $fruta = DB::table('frutas')->where('id','=',$id)->get(); */

        /* Trae el objeto limpio sin ser un array */
        $fruta = DB::table('frutas')->where('id','=',$id)->first();

        return view('fruta.detail',[
            'fruta' => $fruta
        ]);
    }

    public function create(){
        return view('fruta.crear');
    }

    public function save(Request $request){
        //guardar el registro
        $fruta = DB::table('frutas')->insert(array(
            'nombre' => $request->input('nombre'),
            'descripcion' => $request->input('descripcion'),
            'precio' => $request->input('precio'),
            'fecha' => date('Y-m-d')
        ));

        return redirect()->action('FrutaController@index')->with('status','Fruta creada correctamente');
    }

    public function delete($id){
        $fruta = DB::table('frutas')->where('id',$id)->delete();

        return redirect()->action('FrutaController@index')->with('status','Fruta borrada correctamente');
    }


    public function edit($id){
        //sacar el registro de la bd
        //pasarle a la vista el objeto y rellenar el formulario

        $fruta = DB::table('frutas')->where('id',$id)->first();

        return view('fruta.crear',[
            'fruta' => $fruta
        ]);
    }

    public function update(Request $request){
        $id = $request->input('id');

        $fruta = DB::table('frutas')->where('id',$id)
                                    ->update(array(
                                        'nombre' => $request->input('nombre'),
                                        'descripcion' => $request->input('descripcion'),
                                        'precio' => $request->input('precio')
                                    ));
        return redirect()->action('FrutaController@index')->with('status','Fruta actualizada correctamente');
    }
}
