<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Animal;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\ORM\EntityManagerInterface;

/* FORMS */
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;

//VALIDATOR
use Symfony\Component\Validator\Validation;
use Symfony\Component\Validator\Constraints\Email;

use App\Form\AnimalType;

/* SESIONS */
use Symfony\Component\HttpFoundation\Session\Session;


class AnimalController extends AbstractController
{

    public function validarEmail($email)
    {
        $validator = Validation::createValidator();
        $errores = $validator->validate($email,[
            new Email()
        ]);

        if(count($errores) != 0){
            echo 'El dato no se ha validado correctamente';

            foreach($errores as $error){
                echo $error->getMessage() . '<br>';
            }
        }else{
            echo 'El email se ha validado correctamente';
        }

        die();
    }

    public function crearAnimal(Request $request){
        $animal = new Animal();

        $form = $this->createForm(AnimalType::class, $animal);                    

        $form->handleRequest($request);

        /* Validación incluída */
        if($form->isSubmitted() && $form->isValid()){
            
            $em = $this->getDoctrine()->getManager();
            $em->persist($animal);
            $em->flush();

            // Sesión flash
            $session = new Session();
            /* $session->start(); */
            $session->getFlashBag()->add('message','Animal creado');

            return $this->redirectToRoute('crear_animal');
        }

        return $this->render('animal/crear-animal.html.twig',[
            'form' => $form->createView()
        ]);
            
        
    }
    
    public function index()
    {
    
        /* USO DE QUERY BUILDER */
        /* ----------------------------------------------------------------------------- */
        $animal_repo = $this->getDoctrine()->getRepository(Animal::class);

        $qb = $animal_repo->createQueryBuilder('a')
                            ->andWhere("a.raza = 'americana'")
                            ->getQuery();

        $resulset = $qb->execute();

        var_dump($resulset);

        echo '<br><br>';

        /* Con setParameter (otra forma) */
        $qb2 = $animal_repo->createQueryBuilder('a')
                            ->andWhere("a.raza = :raza")
                            ->setParameter('raza','americana')
                            ->orderBy('a.id','DESC')
                            ->getQuery();

        $resulset2 = $qb2->execute();

        var_dump($resulset2);

        echo '<br><br>';

        /* Usando los REPOSITORIOS */
        /* $animals = $animal_repo = getAnimals('DESC');

        var_dump($animals);

        echo '<br><br>'; */
        /* ------------------------------------------------------------------------ */





        /* DQL (lenguaje de subconsultas SQL) */
        /* ----------------------------------------------------------------------------- */
        // Cargar entityManager
        $em = $this->getDoctrine()->getManager();

        // Consulta SQL
        $dql = "SELECT a FROM App\Entity\Animal a WHERE a.raza = 'americana'";

        $query = $em->createQuery($dql);
        $resulset3 = $query->execute();

        var_dump($resulset3);

        echo '<br><br>';
        /* -------------------------------------------------------------------------- */







        /* SQL */
        /* ----------------------------------------------------------------------------- */
        $connection = $this->getDoctrine()->getConnection();
        $sql = 'SELECT * FROM animal ORDER BY id DESC';
        $prepare = $connection->prepare($sql); //prepara la consulta
        $prepare->execute(); //realiza la consulta
        $resulset4 = $prepare->fetchAll(); //devuelve los datos de la BD

        var_dump($resulset4);

        echo '<br><br>';

        /* ----------------------------------------------------------------------------- */





        /* ORM DOCTRINE */
        /* ----------------------------------------------------------------------------- */
        // Cargar repositorio
        $animal_repo = $this->getDoctrine()->getRepository(Animal::class);

        // Consulta
        $animales = $animal_repo->findAll();

        // Consulta (WHERE)
        $animal_tipo = $animal_repo->findOneBy([
            'tipo' => 'Vaca'
        ]);

        // Consulta (WHERE (todos))
        $animal_raza = $animal_repo->findBy([
            'raza' => 'Americana'
        ]);

        // Consulta (WHERE (todos)) con ordenamiento
        $animal_raza_orden = $animal_repo->findBy([
            'raza' => 'Americana'
        ], [
            'id' => 'DESC'
        ]);
        /* ----------------------------------------------------------------------------- */

        return $this->render('animal/index.html.twig', [
            'controller_name' => 'AnimalController',
            'animales' => $animales
        ]);
    }

    /* Usar este save para probar con el FORM */
    /* public function save(Request $request){
        

    } */

    public function save(){

        // Cargo en entityManager
        $entityManager = $this->getDoctrine()->getManager(); 

        // Creo objetos y le doy valores
        $animal = new Animal();
        $animal->setTipo('Avestruz');
        $animal->setColor('Verde');
        $animal->setRaza('Africana');

        // Guardar objeto en doctrine de forma persistente
        $entityManager->persist($animal);

        // Volcar datos en la tabla de la BD
        $entityManager->flush();    

        // Añadir use Symfony\Component\HttpFoundation\Response; arriba
        return new Response('El animal guardado tiene el id: ' . $animal->getId());
    }
    
    public function animal($id){

        // Cargar repositorio
        $animal_repo = $this->getDoctrine()->getRepository(Animal::class);

        // Consulta
        $animal = $animal_repo->find($id);

        // Comprobar si el resultado es correcto
        if(!$animal){
            $message = 'El animal no existe';
        }else{
            $message = 'Tu animal seleccionado es: ' . $animal->getTipo() . ' ' . $animal->getRaza();
        }
        return new Response($message);
    }

    public function update($id){

        // Cargar doctrine
        $doctrine = $this->getDoctrine();

        // Cargar entityManager
        $em = $doctrine->getManager();

        // Cargar repo Animal
        $animal_repo = $em->getRepository(Animal::class);

        // Find para conseguir objeto
        $animal = $animal_repo->find($id);

        // Comprobar si el objeto llega
        if(!$animal){
            $message = 'El animal no existe en la BBDD';
        }else{
            // Asignar valores al objeto
            $animal->setTipo('Perro');
            $animal->setColor('rojo');

            // Persistir en doctrine el objeto
            $em->persist($animal);

            // Guardar en la BD
            $em->flush();

            $message = 'Has actualizado el animal ' . $animal->getId();
        }

        // Respuesta
        return new Response($message);
    }

    public function delete(Animal $animal){

        // Cargar doctrine
        $doctrine = $this->getDoctrine();

        // Cargar entityManager
        $em = $doctrine->getManager();

        if($animal && is_object($animal)){
            // Borramos de la clase
            $em->remove($animal);

            // Borrado de la BD
            $em->flush();

            $message = 'Animal borrado correctamente';
        }else{
            $message = 'Animal no encontrado';
        }
        return new Response($message);
    }
}
