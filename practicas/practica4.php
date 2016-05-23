<?php
    function cypher($mensaje, $key){
        $mensajeSplit = str_split($mensaje);
        $finalKey = chr($key);
        for($i = 0; $i <= count($mensajeSplit)-1; $i++){
            $privateKey = chr($key);
            $mensajeSplit[$i] .= $privateKey;
            $key++;
        }
        echo "Llave privada: " .$finalKey. " Mensaje cifrado: " .str_ireplace(" ", "", implode(" ", $mensajeSplit));
    }
    function desCypher($mensaje, $key){
        $error = array("a142s{as-,!fav142||{ASF+142}}", "´142fasd{'D124/ASD&%14'}Fsd", "<1a124sf¨?!sdfa]412[]asvD");
        $mensajeSplit = str_split($mensaje);
        $letter = ord($key);
        for ($i = 1; $i <= count($mensajeSplit)-1; $i +=2) {
            ($mensajeSplit[$i] == chr($letter)) ? $mensajeSplit[$i] = "." : $mensajeSplit[$i] = $error[rand(0,2)];
            $letter++;
        }
        $final = str_ireplace(".", "", implode(" ", $mensajeSplit));
        $final = str_replace(" ","",$final);
        echo "Mensaje descifrado: " .$final;
    }
    (isset($_POST["descifrar"])) ? desCypher($_POST["texto"], $_POST["key"]) : cypher($_POST["texto"], $_POST["key"]);
?>
