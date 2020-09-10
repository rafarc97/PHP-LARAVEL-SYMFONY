<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
/* use Illuminate\Support\Facades\Request; */

class PeliculaController extends Controller
{
    public function index($pagina = 1){
        $titulo = 'Listado de mis películas';
        return view('peliculas.index',[
            'titulo' => $titulo,
            'pagina' => $pagina
        ]);
    }

    /* public function detalle(){
        return view('peliculas.detalle');
    } */

    public function redirigir(){
        return redirect()->action('PeliculaController@detalle');

        /* Otra forma: */
        return redirect('/detalle');

        /* Otra forma: */
        return redirect()->route('detalle.pelicula');
    }

    /* Middlewares */
    public function detalle($year = null){
        return view('peliculas.detalle');
    }

    public function formulario(){
        return view('peliculas.formulario');
    }

    public function recibir(Request $request){
        $name = $request->input('nombre');
        $email = $request->input('email');

        return 'El nombre es '. $name;
    }

}
