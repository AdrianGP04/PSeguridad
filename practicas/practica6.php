<?php
    $mensajeSplit = str_split($_POST["texto"]);
    $suma = 0;
    for($i = 0; $i <= count($mensajeSplit)-2; $i++){
        $suma += ord($mensajeSplit[$i]) + ord($mensajeSplit[$i+1]);
    }
    echo $suma;
?>
