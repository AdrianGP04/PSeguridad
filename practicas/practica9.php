<?php
if(strlen(trim($_POST["texto"])) == 16){
    $suma = 0;
    $r = 0;
    $visa = str_split(trim($_POST["texto"]));
    if($visa[0] == 4){
        for ($i = 0; $i <= 14; $i++) {
            if($i%2 == 0)
                $result = (2*$visa[$i]);
            else
                $result = $visa[$i];
            $suma += $result;
            if($result >= 10){
                $r++;
            }
        }
        $suma = (-1*$suma);
        $r = (-1*$r);
        echo ($suma*$r)%10;
    }
    else
        echo "La tarjeta debe comenzar con un 4";
}
else
    echo "La longitud de la tarjeta debe ser de 16 dígitos";


    //Método dos
// function separate($num){
//     $number = strval($num);
//     return (intval($number[0])+intval($number[1]));
// }
// if(strlen(trim($_POST["texto"])) == 16){
//     $suma = 0;
//     $r = 0;
//     $visa = str_split(trim($_POST["texto"]));
//     if($visa[0] == 4){
//         for ($i = 0; $i <= 14; $i++) {
//             if($i%2 == 0)
//                 $result = (2*$visa[$i]);
//             else
//                 $result = $visa[$i];
//             $suma += $result;
//             if($result >= 10){
//                 $r += separate($result);
//             }
//         }
//         $suma += $r;
//         echo $suma%10;
//     }
//     else
//         echo "La tarjeta debe comenzar con un 4";
// }
// else
//     echo "La longitud de la tarjeta debe ser de 16 dígitos";
?>
