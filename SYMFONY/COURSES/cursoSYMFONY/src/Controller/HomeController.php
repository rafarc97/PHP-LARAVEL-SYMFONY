<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/home", name="home")
     */
    public function index()
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'hello' => 'Hola mundo con Symfony'
        ]);
    }

    /* Parámetro obligatorio u opcional el defaults en el .yaml*/
    public function animales($nombre,$apellidos){
        $title = 'Bienvenido a la página de animales';
        $animales = array('perro','gato','paloma','rata');
        $aves = array(
            'tipo' => 'periquito',
            'color' => 'azul verdoso',
            'edad' => 2,
            'raza' => 'roseicollis');

        return $this->render('home/animales.html.twig',[
            'title' => $title,
            'nombre' => $nombre,
            'apellidos' => $apellidos,
            'animales' => $animales,
            'aves' => $aves
        ]);
    }

    public function redirigir(){

        /* Una forma de redirigir */
        /* return $this->redirectToRoute('index'); */


        /* Pasando parámetros */
        /* return $this->redirectToRoute('animales', [
            'nombre' => 'Rafa',
            'apellidos' => '23'
        ]); */

        /* Otra forma */
        return $this->redirect('http://rafacalventeweb.com');
    }
}
