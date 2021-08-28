<?php

    /*variaveis*/

if ($_POST) {
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
    $genero1 = $_POST ["genero1"];
    $genero2 = $_POST ["genero2"];
    $genero3 = $_POST ["genero3"];
    $genero4 = $_POST ["genero4"];
    $genero5 = $_POST ["genero5"];
    $genero6 = $_POST ["genero6"];
    $genero7 = $_POST ["genero7"];
    $genero8 = $_POST ["genero8"];
    $genero9 = $_POST ["genero9"];
    $genero10 = $_POST ["genero10"];

    /*maior altura*/
    $lista = array($num01, $num02, $num03, $num04, $num05, $num06, $num07, $num08, $num09, $num10);
    $maior = max($lista);

    /*maior é homem ou mulher*/
    $listas = array(
    array($num01 => "num01",$genero1 => "genero1"),
    array($num02 => "num02",$genero2 => "genero2"),
    array($num03 => "num03",$genero3 => "genero3"),
    array($num04 => "num04",$genero4 => "genero4"),
    array($num05 => "num05",$genero5 => "genero5"),
    array($num06 => "num06",$genero6 => "genero6"),
    array($num07 => "num07",$genero7 => "genero7"),
    array($num08 => "num08",$genero8 => "genero8"),
    array($num09 => "num09",$genero9 => "genero9"),
    array($num10 => "num10",$genero10 => "genero10"),
    );

    foreach($listas as $result){

    }
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
        <div class="resultado">
            <?php
            echo "a maior altura é {$maior}.";
            ?>
        </div>
        <a href="index.php"><button>Voltar</button></a>
    </main>
</body>
</html>
