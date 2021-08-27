<?php

    if ($_POST) {
        /*variaveis*/
        $num01 = $_POST ["num01"];
        $num02 = $_POST ["num02"];
        $num03 = $_POST ["num03"];
        $num04 = $_POST ["num04"];
        $num05 = $_POST ["num05"];
        $num06 = $_POST ["num06"];
        $num07 = $_POST ["num07"];
        $num08 = $_POST ["num08"];
        $num09 = $_POST ["num09"];
        $num10 = $_POST ["num10"];
        $p = 0;
        $i = 0;
        $mediap=0;

        /*lista*/
        $lista = array($num01 , $num02, $num03, $num04, $num05,
        $num06, $num07, $num08, $num09, $num10);

        /*média*/
        $media = array_sum($lista) / 10;
        echo "a média entre a soma dos valores informados é {$media}.</br>";

        if($num01 % 2 == 0){
            $p = $p + 1;
            $mediap = $media + $num01;
        }else{
            $i = $i + 1;
        }
        if($num02 % 2 == 0){
            $p = $p + 1;
            $mediap = $media + $num02;
        }else{
            $i = $i + 1;
        }
        if($num03 % 2 == 0){
            $p = $p + 1;
            $mediap = $media + $num03;
        }else{
            $i = $i + 1;
        }
        if($num04 % 2 == 0){
            $p = $p + 1;
            $mediap = $media + $num04;
        }else{
            $i = $i + 1;
        }
        if($num05 % 2 == 0){
            $p = $p + 1;
            $mediap = $media + $num05;
        }else{
            $i = $i + 1;
        }
        if($num06 % 2 == 0){
            $p = $p + 1;
            $mediap = $media + $num06;
        }else{
            $i = $i + 1;
        }
        if($num07 % 2 == 0){
            $p = $p + 1;
            $mediap = $media + $num07;
        }else{
            $i = $i + 1;
        }
        if($num08 % 2 == 0){
            $p = $p + 1;
            $mediap = $media + $num08;
        }else{
            $i = $i + 1;
        }
        if($num09 % 2 == 0){
            $p = $p + 1;
            $mediap = $media + $num09;
        }else{
            $i = $i + 1;
        }
        if($num10 % 2 == 0){
            $p = $p + 1;
            $mediap = $media + $num10;
        }else{
            $i = $i + 1;
        }
        $mediap = $mediap / $p;
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <main>
        <div class="resposta">
            <?php
                echo "Total de numeros Pares {$p} <br>";
                echo "Total de numeros Impares {$i} <br>";
                echo "Média geral dos números informados {$media} <br>";
                echo "Média geral dos números pares {$mediap} <br>";
            ?>
        </div>
        <a href="index.php"><button>Voltar</button></a>
    </main>
</body>
</html>
