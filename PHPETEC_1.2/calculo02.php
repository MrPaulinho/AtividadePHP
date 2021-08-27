<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <main>
        <div class="mensagem1">
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


        /*lista*/
        $lista = array($num01 , $num02, $num03, $num04, $num05,
        $num06, $num07, $num08, $num09, $num10);

        /*média*/
        $media = array_sum($lista) / 10;
        echo "a média entre a soma dos valores informados é {$media}.";

        /*qtd nº negativo*/

        /*qtd nº positivo*/


    }

?>
        </div>
        <a href="index.php"><button>Voltar</button></a>
    </main>
</body>
</html>
