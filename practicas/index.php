<?php
    include("./filtro.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title> Practicas </title>
        <link type="image/x-icon" href="../favicon.ico" rel="icon" />
        <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
        <script src="../bootstrap/js/jquery.min.js"></script>
        <script src="../bootstrap/js/bootstrap.min.js"></script>
    </head>
    <body>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.html"> Proyecto Seguridad </a>
                </div>
                <ul class="nav navbar-nav navbar-right">
                <li><a href="cerrar.php"> Cerrar sesión </a></li>
              </ul>
            </div>
        </nav>
        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modalOne"> Práctica 1 </button>
        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modalTwo"> Práctica 2 </button>
        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modalThree"> Práctica 3 </button>
        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modalFour"> Práctica 4 </button>
        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modalFive"> Práctica 5 </button>
        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modalSix"> Práctica 6 </button>
        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modalSeven"> Práctica 7 </button>
        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modalEight"> CURP </button>
        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modalNine"> VISA </button>
        <div class="modal fade" id="modalOne" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel"> Cifrado Play-fair </h4>
                    </div>
                    <div class="modal-body">
                        <form autocomplete="off">
                            <input type="text" id="P1Texto" placeholder="Texto a cifrar/descifrar"/><br><br>
                            <select id="P1Num">
                                <option value="1"> 1 </option>
                                <option value="2"> 2 </option>
                                <option value="3"> 3 </option>
                                <option value="4"> 4 </option>
                                <option value="5"> 5 </option>
                            </select><br><br>
                            <input type="checkbox" id="P1Desc" name="descifrar" value="1"/> Descifrar <br><br>
                            <input type="submit" id="P1Sub" value="Enviar"/>
                            <p id="P1Result"> </p>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="modalTwo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel"> Voltear número de cuenta </h4>
                    </div>
                    <div class="modal-body">
                        <form autocomplete="off">
                            <input type="text" id="P2Texto" name="texto" placeholder="Texto a cifrar/descifrar"/><br><br>
                            <input type="checkbox" id="P2Desc" name="descifrar" value="1"/> Descifrar <br><br>
                            <input id="P2Sub" type="submit" value="Enviar"/>
                            <p id="P2Result"> </p>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="modalThree" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel"> Voltear cadena </h4>
                    </div>
                    <div class="modal-body">
                        <form autocomplete="off">
                            <input type="text" id="P3Texto" name="texto" placeholder="Texto a cifrar/descifrar"/><br><br>
                            <input type="text" id="P3Key" name="key" placeholder="Llave"/><br><br>
                            <input type="radio" id="P3Desc" name="descifrar" value="1"/> Descifrar <br><br>
                            <input id="P3Sub" type="submit" value="Enviar"/>
                            <p id="P3Result"> </p>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="modalFour" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel"> Cifrado con llave privada </h4>
                    </div>
                    <div class="modal-body">
                        <form autocomplete="off">
                            <input type="text" id="P4Texto" name="texto" placeholder="Texto a cifrar/descifrar"/><br><br>
                            <input type="text" id="P4Key" name="key" placeholder="Letra en #ASCII / Letra"/><br><br>
                            <span id="helpBlock" class="help-block">Ejemplo de ASCII: 80. Ejemplo de letra acorde al ASCII: P</span>
                            <input type="checkbox" id="P4Desc" name="descifrar" value="1"/> Descifrar <br><br>
                            <input id="P4Sub" type="submit" value="Enviar"/>
                            <p id="P4Result"> </p>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="modalFive" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel"> Hash </h4>
                    </div>
                    <div class="modal-body">
                        <form autocomplete="off">
                            <input type="text" id="P5Texto" name="texto" placeholder="Texto a cifrar"/><br><br>
                            <input id="P5Sub" type="submit" value="Enviar"/>
                            <p id="P5Result"> </p>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="modalSix" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel"> Suma de ASCII </h4>
                    </div>
                    <div class="modal-body">
                        <form autocomplete="off">
                            <input type="text" id="P6Texto" name="texto" placeholder="Texto a sumar"/>
                            <p id="P6Result"> </p>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="modalSeven" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel"> ISBN </h4>
                    </div>
                    <div class="modal-body">
                        <form autocomplete="off">
                            <input type="text" id="P7Texto" name="texto" placeholder="ISBN"/>
                            <select id="P7Sel">
                                <option value="10"> 10 </option>
                                <option value="13"> 13 </option>
                            </select>
                            <p id="P7Result"> </p>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="modalEight" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel"> CURP </h4>
                    </div>
                    <div class="modal-body">
                        <form autocomplete="off">
                            <input type="text" id="P8Texto" name="texto" placeholder="CURP"/>
                            <input id="P8Sub" type="submit" value="Checar">
                            <p id="P8Result"> </p>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="modalNine" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel"> VISA </h4>
                    </div>
                    <div class="modal-body">
                        <form autocomplete="off">
                            <input type="text" id="P9Texto" name="texto" placeholder="VISA"/>
                            <p id="P9Result"> </p>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>
    </body>
    <script>
    $("#P1Sub").click(function(event){
        var P1What;
        event.preventDefault();
        if($("#P1Desc").is(":checked"))
            P1What = true;
        $.post("practica1.php",
        {
            descifrar: P1What,
            texto: $("#P1Texto").val(),
            selnum: $("#P1Num").val()
        },
        function(data){
            $("#P1Result").html(data);
        });
    });
    $("#P2Sub").click(function(event){
        event.preventDefault();
        var text = $("#P2Texto").val();
        var nuevo = "";
        if($("#P2Desc").is(":checked")){
            for (var i = 8; i >= 0; i--) {
                nuevo += text.charAt(i);
            }
            $("#P2Result").html(nuevo);
        }
        else{
            for (var i = 8; i >= 0; i--) {
                nuevo += text.charAt(i);
            }
            $("#P2Result").html(nuevo);
        }
    });
    $("#P3Sub").click(function(event){
        event.preventDefault();
       $.post("practica3.php",
       {
         texto: $("#P3Texto").val(),
         key: $("#P3Key").val()
       },
       function(data){
           $("#P3Result").html(data);
       });
    });
    $("#P4Sub").click(function(event){
        var P4What;
        event.preventDefault();
        if($("#P4Desc").is(":checked"))
            P4What = true;
       $.post("practica4.php",
       {
         descifrar: P4What,
         texto: $("#P4Texto").val(),
         key: $("#P4Key").val()
       },
       function(data){
           $("#P4Result").html(data);
       });
    });
    $("#P5Sub").click(function(event){
        event.preventDefault();
       $.post("practica5.php",
       {
         texto: $("#P5Texto").val()
       },
       function(data){
           $("#P5Result").html(data);
       });
    });
    $("#P6Texto").keyup(function(event){
        event.preventDefault();
       $.post("practica6.php",
       {
         texto: $("#P6Texto").val()
       },
       function(data){
           $("#P6Result").html(data);
       });
    });
    var P7What;
    $("#P7Texto").keyup(function(event){
        if($("#P7Sel").val() == "10")
            P7What = "10";
        else
            P7What = "13";
        event.preventDefault();
       $.post("practica7.php",
       {
         texto: $("#P7Texto").val(),
         what: P7What
       },
       function(data){
           $("#P7Result").html(data);
       });
    });
    $("#P8Sub").click(function(event){
        event.preventDefault();
        if($("#P8Texto").val().length == 18)
       $.post("practica8.php",
       {
         texto: $("#P8Texto").val()
       },
       function(data){
           $("#P8Result").html(data);
       });
       else
         $("#P8Result").html("La longitud del CURP es incorrecta");
    });
    $("#P9Texto").keyup(function(event){
        event.preventDefault();
       $.post("practica9.php",
       {
         texto: $("#P9Texto").val()
       },
       function(data){
           $("#P9Result").html(data);
       });
    });
    </script>
</html>
