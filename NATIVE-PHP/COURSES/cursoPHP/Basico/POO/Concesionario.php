<?php

	class Compra_vehiculo{
		
		private $precio_base;
		
		/* Esta variable estatica indica que los objetos que creemos
		de esta clase no van a tener una variable ayuda, sino que la 
		variable ayuda pertenece a la clase. */
		//static $ayuda=4500;
		private static $ayuda = 0;
				
		function Compra_vehiculo($gama){
			
			if($gama=="urbano"){
				
					$this->precio_base=10000;
				
			}else if($gama=="compacto"){
				
				
					$this->precio_base=20000;	
				
			}
			
			else if($gama=="berlina"){
				
					$this->precio_base=30000;	
				
			}		
			
			
		}// fin constructor
		
		/* Creamos un método estático, es decir pertenece a la clase, no a ningún objeto creado
		de esta clase. */
		static function descuento_gobierno(){
				self::$ayuda = 4500;
		}
		
		
		
		function climatizador(){		
			
			
				$this->precio_base+=2000;					
			
			
		}// fin climatizador
		
		
		function navegador_gps(){
			
			$this->precio_base+=2500;	
			
		}//fin navegador gps
		
		
		
		function tapiceria_cuero($color){
			
			if($color=="blanco"){
			
				$this->precio_base+=3000;
			}
			
			else if($color=="beige"){
				
				$this->precio_base+=3500;
				
			}
			
			else{
				
				$this->precio_base+=5000;
				
			}
			
		}// fin tapicería
		
		
		
		function precio_final(){
			
			/* self::$ayuda se pone porque es una variable estática, lo cual
			indica que es una variable que pertenece a la clase, no al objeto
			que llama a la función de esta clase. */
			$valor_final=$this->precio_base-self::$ayuda;
			
			return $valor_final;	
			
		}// fin precio final
		
		
		
	}// fin clase


?>