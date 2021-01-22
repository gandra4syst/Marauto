<?php
session_start();
if (isset($_SESSION["numlogin"])) {
    $n1 = $_GET["num"];
    $n2 = $_SESSION["numlogin"];
    if ($n1 != $n2) {
        echo "<p>Login não foi efectuado.</p>";
        exit;
    }
} else {
    echo "<p>Login não foi efectuado.</p>";
    exit;
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Início</title>
    <link rel="stylesheet" href="estilo.css">
    <script src="jquery-3.1.1.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#menuB1, #menuB2, #menuB3, #menuB4").css("visibility", "hidden");
            $("#menuA1").click(function() {
                $("#menuB1").css("visibility", "visible");
                $("#menuB2").css("visibility", "hidden");
                $("#menuB3").css("visibility", "hidden");
                $("#menuB4").css("visibility", "hidden");
            });
            $("#menuA2").click(function() {
                $("#menuB2").css("visibility", "visible");
                $("#menuB1").css("visibility", "hidden");
                $("#menuB3").css("visibility", "hidden");
                $("#menuB4").css("visibility", "hidden");
            });
            $("#menuA3").click(function() {
                $("#menuB3").css("visibility", "visible");
                $("#menuB1").css("visibility", "hidden");
                $("#menuB2").css("visibility", "hidden");
                $("#menuB4").css("visibility", "hidden");
            });
            $("#menuA4").click(function() {
                $("#menuB4").css("visibility", "visible");
                $("#menuB1").css("visibility", "hidden");
                $("#menuB3").css("visibility", "hidden");
                $("#menuB2").css("visibility", "hidden");
            });
            $("#menuB1, #menuB2, #menuB3, #menuB4").mouseover(function() {
                $(this).css("visibility", "visible");
            });
            $("#menuB1, #menuB2, #menuB3, #menuB4").mouseout(function() {
                $(this).css("visibility", "hidden");
            });
        });
    </script>
</head>

<body>
    <header>
        <?php
        include "topo.php";
        ?>
    </header>

    <section>
        <p>Menu principal de gestão</p>
    </section>
    <nav>
        <div class="gest">
            <button id="menuA1" class="btnGest">Carros</button>
            <div id="menuB1" class="menuB">
                <a href="#" target="_self">Marcas</a>
                <a href="#" target="_self">Inserir carro</a>
                <a href="#" target="_self">Editar carro</a>
                <a href="#" target="_self">Excluir carro</a>
            </div>
        </div>
        <div class="gest">
            <button id="menuA2" class="btnGest">Configurar</button>
            <div id="menuB2" class="menuB">
                <a href="#" target="_self">Configurar</a>
            </div>
        </div>
        <div class="gest">
            <button id="menuA3" class="btnGest">Colaboradores</button>
            <div id="menuB3" class="menuB">
                <a href="#" target="_self">Inserir colaborador</a>
                <a href="#" target="_self">Editar colaborador</a>
                <a href="#" target="_self">Excluir colaborador</a>
            </div>
        </div>
        <div class="gest">
            <button id="menuA4" class="btnGest">Sair</button>
            <div id="menuB4" class="menuB">
                <a href="#" target="_self">Sair</a>
            </div>
        </div>
    </nav>


</body>

</html>