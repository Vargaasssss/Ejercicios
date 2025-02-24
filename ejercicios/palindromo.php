 palindromo.php
 <?php
        
function palindromo($palabra)
{
    $minusculas = explode(" ", strtolower($palabra)); //Convertimos la cadena a minusculas
    $nuevo="";
    foreach($minusculas as $m)
    {
        $m = trim($m); //Eliminamos los espacios en blanco
        $nuevo .= $m; 
    }
    
    if($nuevo == strrev($nuevo))
    {
        return "Es Palindromo";
    }
    else {
        return "No es Palindromo";
    }
}

$palabra = "Anita lava la tina";
echo palindromo($palabra);
?>
