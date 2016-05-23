<?php
    function randomWord($num){
        $values = array("0","1","2","3","4","5","6","7","8","9","a","b","c","d","e","f","g","h","i","j","k","l",
                        "m","ñ","n","o","p","q","r","s","t","u","v","w","x","y","z");
        $randomWord = "";
        for($i = 0; $i < $num; $i++){
            $randomWord .= $values[rand(0,36)];
        }
        return $randomWord;
    }
    if(isset($_POST["RegInput"]) && isset($_POST["RegPass"]) && !empty($_POST["RegPass"]) && !empty($_POST["RegInput"])){
        include("conexion.php");
        $con = mysqli_connect($host,$user,$pass,$db) or die("Problemas con el servidor");
        mysqli_select_db($con,$db) or die ("Problemas al conectar la base de datos");
        $name = mysqli_real_escape_string($con, $_POST["RegInput"]);
        $password = mysqli_real_escape_string($con, $_POST["RegPass"]);
        $password2 = mysqli_real_escape_string($con, $_POST["RegPassConfirm"]);
        if($password == $password2){
            $checkuser = mysqli_num_rows(mysqli_query($con,"SELECT * FROM users WHERE NAME = '$name'"));
            if($checkuser > 0)
                echo "El nombre de usuario ya está siendo usado.";
            if($checkuser == 0){
                mysqli_query ($con, "SET NAMES 'utf8'");
                $cpass = randomWord(5).sha1($password).randomWord(5);
                mysqli_query($con,"INSERT INTO users VALUES (DEFAULT,'$name','$cpass')");
                echo "Te has registrado con éxito.";
            }
        }
        else
            echo "Las contraseñas no coinciden.";
    }
    else
        echo "Debes llenar todos los campos.";
?>
