<?php


//criando uma conexao com banco de dados

$con = mysqli_connect("localhost", "root", "", "db_2h2022");

//checando a conexao

if(mysqli_connect_errno()){
    echo "Erro ao conectar com a base de dados: ". mysqli_connect_error();
}else{
    echo "Conexão Aberta";
}
?>