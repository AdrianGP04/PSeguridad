<?php
    function searchLetter($letter){
        $values = array("0","1","2","3","4","5","6","7","8","9","A","B","C","D","E","F","G","H","I","J","K","L",
                        "M","Ñ","N","O","P","Q","R","S","T","U","V","W","X","Y","Z");
        foreach ($values as $key => $value){
            if($letter == $value)
                return $key;
        }
    }
    $curp = str_split($_POST["texto"]);
    $fallo = 0;
    if($curp[4] == 0)
        if($curp[16] != "A")
            $fallo += 1;
    $result = 0;
    $mult = 18;
    for($i = 0; $i < 16; $i++){
        $result += $mult * searchLetter($curp[$i]);
        $mult--;
    }
    if($result%10 == $curp[17])
        echo "El CURP es correcto";
    else
        echo (count($curp) < 18 || $fallo != 0 || (10-$result%10) != $curp[17]) ? "El CURP es incorrecto" : "El CURP es correcto";
?>
