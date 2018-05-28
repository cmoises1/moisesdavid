<?php
	
function IsCasiPalindromo($a) {

	$b = strrev($a);
    $string_reverse = str_split($b);
    $string_reverse2 = str_split($a);
    $palin = '';

    //Caso 1, palindromo 
    foreach($string_reverse as $key=>$value){
        $palin.= $value; 
    }
    
    if($a == $palin){
        print "<br>True";
    } else {
    	$contador = 0;
    	//Caso 2, palindromo modificando 1 letra
    	for ($i=0; $i < count($string_reverse); $i++) { 
    		if($string_reverse[$i] == $string_reverse2[$i]) {
    		}
    		else {
    			$contador++;
    		}
    	}
    	$contador = $contador / 2;

    	if($contador==1){
    		print "<br>True";
    	}
    	elseif($contador>=2) {
    		print "<br>False";	
    	}
    }
}

	//Palabra de prueba
	$palabra = "abccba";
	$palabra = IsCasiPalindromo($palabra);

?>