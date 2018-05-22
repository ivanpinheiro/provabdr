<?php
/**
 * Classe que retorna os números múltiplos de 3 e 5
 */
class numerosMultiplos
{	

	/**
	* Método que executa a operação que informa os números múltiplos de 3 e 5 
	* e os números que são múltiplos de ambos
	*/
	public function retornaNumerosMultiplos($num1, $num2)
	{
		for($i=$num1;$i<=$num2;$i++){
			if($i % 3 ==0){
				echo"Fizz Número :". $i."</br>";
				if($i % 5 ==0){
					echo"FizzBuzz Número :". $i."</br>";
				}		
			}
			else if($i % 5 ==0){
				echo"Buzz Número :". $i."</br>";
			}
		}
	}
}

	$multiplos = new numerosMultiplos();
	$multiplos->retornaNumerosMultiplos($num1 = 1, $num2 = 100);

?>