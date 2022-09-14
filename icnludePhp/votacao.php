<?php

    include("cabecalho.php");

    $idade = 16;

    if ($idade < 16){

        include("votacao_menor.php");
    }
    else if ($idade < 18){

        include("votacao_16.php");
    }
    else{

        include("votacao_maior.php");
    }
        include("rodape.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Votação</title>   
</head>
<body>
    <h1>Condição de votação</h1>


    <p staly:color:#fff;;> <color><div id="ffffff"></div><color/>  Quando for adicionar php no html, não se salva o arquivo HTML e sim como PHP!!!</p>
</body>
</html>