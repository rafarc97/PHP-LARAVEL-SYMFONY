<?php

class Coche{
    /* Variable solo accesible desde la propia clase
    NO podremos hacer $mazda->ruedas = 7 (por ejemplo) 
    y tampoco puedo hacer echo $mazda->ruedas porque
    dicha variable está encapsulada, para ello utilizaremos
    los métodos getters y setters.
    
    -setter: modificar las propiedades de un objeto
    -getter: ver las propiedades de un ubjeto.
    
    */
    protected $ruedas; /* Poner $public $ruedas es lo mismo que no poner public,
     pq es el qe viene por defecto.*/ 
    var $color;
    var $motor;

        /* Método/Función constructor indicará el estado inicial de los objetos
        que pertenezcan a esta clase cada vez que sean creados. Siempre debe llevar
        el mismo nombre que la clase */

    function Coche(){
        /* La palabra $this siempre se refiere a la clase coche */
        $this->ruedas = 4;
        $this->color = "";
        $this->motor = "1600"; 
    }

    /* Por convención a las funciones que nos dan info sobre las propiedades de los
    objetos que no se pueden acceder desde fuera se les suele dar el nombre de get,
    lo mismo se haría con el set. */
    function getRuedas(){
        return $this->$ruedas;
    }

    function arrancar(){
        echo "Estoy arrancando <br>";
    }

    function girar(){
        echo "Estoy girando <br>";
    }

    function frenar(){
        echo "estoy frenando <br>";
    }

    function setColor($colorCoche, $nombreCoche){
        $this->color=$colorCoche;
        echo "El color del " . $nombreCoche . " es " . $this->color . "<br>";
    }

}


/* La clase camión tendrá todas las variables y métodos de la clase coche, porque lo ha
heredado gracias a extends.  Coche es la superclase/clase padre y camion la clase hijo/
subclase*/
class Camion extends Coche{

    function Camion(){
        $this->ruedas = 6; /* esto no ser estaría realizando puesto que la var ruedas
        esta protegida y no es visible desde otra clase, para que se accesible desde
        esta clase pero no desde fuera la declaramos protexcted */
        $this->color = "gris";
        $this->motor = "2600"; 
    }


    /* Sobreescritura de métodos: creamos un método en un clase que hereda de otra,
    el cual se llama igual.
    En función de si usamos una instancia coche o camion, el programa llamara
    a al metodo estableceCOlor del coche o del camion respectivamente. */
    
    function setColor($colorCamion, $nombreCamion){
        $this->color=$colorCamion;
        echo "El color del " . $nombreCamion . " es " . $this->color . "<br>";
    }
    
    function arrancar(){
        /* Llamando a la clase padre para hacer referencia al método arrancar 
        y ejecuta todo lo que lleve dicho método y luego se ejecuta lo que esté
        detrás en esta función*/
        parent::arrancar();
        echo "Camion arrancado <br>";

    }

        /* 

        Clase Public: accesdible desde cualquier parte

        Clase Private: accesible desde la propia clase

        Clase Protected: accesible desde la propia clase y clases heredadas
        */
}
?>