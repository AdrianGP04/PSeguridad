<?php
    $mensajeSplit = str_split($_POST["texto"]);
    $key = 60;
    for($i = 0; $i <= count($mensajeSplit)-1; $i++){
        $privateKey = chr($key);
        $mensajeSplit[$i] .= $privateKey;
        $key++;
    }
    echo "Mensaje cifrado: " .str_ireplace(" ", "", implode(" ", $mensajeSplit));
?>
