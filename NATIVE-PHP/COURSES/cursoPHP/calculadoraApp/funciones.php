<style>

.resultado{
  color: yellowgreen;
  font-weight: bold;
  font-size: 32px;
}

</style>

<?php

  function calcular(){

    /* Podemos hacerlo así, o pasando los parámetros por la función */
    global $operacion;
    global $numero1;
    global $numero2;

    if(!strcmp("Suma",$operacion))
      echo "<p class='resultado'> El resultado es: " . ($numero1+$numero2) . "</p> <br>";
  
    if(!strcmp("Resta",$operacion))
     echo "<p class='resultado'> El resultado es: " . ($numero1-$numero2) . "</p> <br>";

    if(!strcmp("Multiplicación",$operacion))
      echo "<p class='resultado'> El resultado es: " . ($numero1*$numero2) . "</p> <br>";

    if(!strcmp("División",$operacion))
      echo "<p class='resultado'> El resultado es: " . ($numero1/$numero2) . "</p> <br>";

    if(!strcmp("Módulo",$operacion))
      echo "<p class='resultado'> El resultado es: " . ($numero1%$numero2) . "</p> <br>";

      if(!strcmp("Incremento",$operacion)){
        $numero1++;
        echo "<p class='resultado'> El resultado es: " . ($numero1) . "</p> <br>";
      }
      if(!strcmp("Decremento",$operacion)){
        $numero1--;
      echo "<p class='resultado'> El resultado es: " . ($numero1) . "</p> <br>";
      }
  }

?>