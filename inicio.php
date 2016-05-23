<?php
    if(isset($_POST["LogInInput"]) && isset($_POST["LogInPass"]) && !empty($_POST["LogInPass"]) && !empty($_POST["LogInInput"])){
        include("conexion.php");
        $con = mysqli_connect($host,$user,$pass,$db) or die("Problemas con el servidor");
        mysqli_select_db($con,$db) or die ("Problemas al conectar la base de datos");
        $name = mysqli_real_escape_string($con, $_POST["LogInInput"]);
        $password = mysqli_real_escape_string($con, $_POST["LogInPass"]);
        mysqli_query ($con, "SET NAMES 'utf8'");
        $result = mysqli_query($con,"SELECT * FROM users WHERE NAME ='$name'");
		$extraido = mysqli_fetch_assoc($result);
        if(isset($extraido["PASSWORD"])){
            $cpass = substr($extraido["PASSWORD"], 5, 40);
            if(sha1($password) == $cpass){
                session_start();
                $_SESSION["ID"] = $extraido["ID"];
                $_SESSION["name"] = $extraido["NAME"];
                header("Location: ./practicas/");
            }
            else
                echo "La contraseña es incorrecta";
        }
        else
            echo "Debes registrarte para continuar";
    }
    else
        echo "Debes llenar todos los campos";
?>
