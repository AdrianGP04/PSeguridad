<?php
    $string = $_POST["texto"];
    $key = $_POST["key"];
    $stringArray = str_split($string);
    $keyArray = str_split($key);
    $nuevo = "";
    if(strlen($string) == strlen($key)){
        for($i = count($stringArray) - 1; $i >= 0; $i--){
            $nuevo .= $stringArray[$i];
        }
        echo $nuevo;
    }
    else {
        echo "Las cadenas no coinciden en numero de letras";
    }
?>
