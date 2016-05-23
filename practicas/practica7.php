<?php
    $num = str_split($_POST["texto"]);
    $suma = 0;
    if($_POST["what"] == "10"){
        if(strlen($_POST["texto"]) == 10){
            for ($i = 0; $i <= count($num)-1 ; $i++) {
                $suma += ($i + 1) * ($num[$i]);
            }
            if(($suma%11) == 0)
                echo "Correcto";
            else
                echo "Incorrecto";
        }
        else
            echo "La longitud del ISBN debe ser de 10 dígitos";
    }
    else {
        if(strlen($_POST["texto"]) == 13){
            for ($i = 0; $i <= count($num)-1; $i++) {
                if($i%2 == 0)
                $suma += $num[$i];
                else
                $suma += 3*$num[$i];
            }
            if((10-$suma)%10 == 0)
                echo "Correcto";
            else
                echo "Incorrecto";
        }
        else
            echo "La longitud del ISBN debe ser de 13 dígitos";
    }
?>
