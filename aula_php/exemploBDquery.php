<?php

$con = mysqli_connect("localhost", "root");

    if(mysqli_connect_errno($con)){
        echo "<br/>Erro ao conectar com a base de dados: ". mysqli_connect_error();
    }else{

        //criando base de dados
        $sql="DROP DATABASE bd_2HPW2";
            if(mysqli_query($con, $sql)){
                echo "<br/> Base de dados criada com sucesso!!!";
            }else{
                echo "<br/>Erro: ".mysqli_error($con);
            }
        mysqli_close($con);
    }



?>