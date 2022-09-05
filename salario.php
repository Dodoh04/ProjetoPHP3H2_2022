<?php

    $salario = 1200.00;             
    $ir = 0;
    $inss= 0;
    $desc= 0;



    echo "Salário bruto: ".$salario;
    echo "Desconto de INSS: ".$inss;
    echo "Desconto de IR: ".$ir;
    echo "Grupo A ";
    echo "Desconto de:".$desc;
    echo "Salário liquido ".$liqui;

    $inss = $salario * 0.075;
    $inss = $salario * 0.09;
    $inss = $salario * 0.12;
    $inss = $salario * 0.14;


    $ir = $salario *  0.075;
    $ir = $salario *  0.15;
    $ir = $salario *  0.225;
    $ir = $salario *  0.275;

    $desc = $salario - ($ir + $inss);

    if ($salario < 1212) {
       $inss = $salario * 0.075;
    }
    elseif ($salario > 1212.00 && < 2427.35){
        $inss = $salario * 0.09;

    }
    elseif ($salario > 2427.36 && < 3641.03){
        $inss = $salario * 0.12;

    }
    else ($salario > 3641.04 && < 7087.22){
        $inss = $salario * 0.14;

    }
    end if


    if ($salario < 1903.98) {
       isento
    }
    elseif ($salario > 1903.99 && < 2826.65){
        $inss = $salario * 0.075;

    }   
    elseif ($salario > 2826.66 && < 3751.05){
        $inss = $salario * 0.15;

    }
    elseif ($salario > 3751.06 && < 4664.68){
        $inss = $salario * 0.225;

    }
    else ($salario > 4664.69){
        $inss = $salario * 0.275;

    }





?>