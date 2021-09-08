<?php
/*--Dados como datos 100 numeros enteros (aleatorios entre -100 y 100) mostrar cada uno de ellos indicando si es POSITVO o NEGATIVO-- */

$numeros=[];

for($i=1; $i<=100; $i++){
    $numeros[]= rand(-100,100); /* carga el array con los numeros*/
} 

foreach($numeros as $valor){
    if($valor<0)
	{
        echo "el numero $valor es NEGATIVO <br>";
	}
		else if ($Valor > 0)
		{
			echo "el numero $valor es POSITIVO <br>";
		}
		else 
		{
			echo "El número $valor es CERO <br>"  //el cero es considerado un número neutro
		}
}

?>