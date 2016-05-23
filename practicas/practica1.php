<?php
if(isset($_POST['descifrar'])){
    $texto = $_POST["texto"];
    $num = $_POST["selnum"];
    $arreglo = str_split($texto);
    $matr = array();
    // echo "Texto ingresado: ".$texto. "<br/>";
    for($i = 0;$i <= $num -1; $i++){
        for($e = 0; $e <= $num -1; $e++){
            $matr[$e][$i] = array_shift($arreglo);
        }
    }
    for($i = 0;$i <= $num -1; $i++){
        for($e = 0; $e <= $num -1; $e++){
            echo $matr[$i][$e];
        }
    }
}
else {
    $texto = $_POST["texto"];
    $num = $_POST["selnum"];
    $arreglo = str_split($texto);
    $matr = array();
    // echo "Texto ingresado: ".$texto. "<br/>";
    for($i = 0;$i <= $num -1; $i++){
        for($e = 0; $e <= $num -1; $e++){
            $matr[$i][$e] = array_shift($arreglo);
        }
    }
    for($i = 0;$i <= $num -1; $i++){
        for($e = 0; $e <= $num -1; $e++){
            echo $matr[$e][$i];
        }
    }
}
?>
