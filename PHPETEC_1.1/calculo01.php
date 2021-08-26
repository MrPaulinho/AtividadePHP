<?php

    /*variaveis*/

if ($_POST) {
    $num01 = $_POST ["num_01"];
    $num02 = $_POST ["num_02"];
    $num03 = $_POST ["num_03"];

    $media = ($num01 + $num02 + $num03) / 3;

    if ($media >= 7) {
        $mensagem = "Sua média {$media}. TÁ APROVADO! VOA LEK";
    }elseif ($media <= 5) {
        $mensagem = "Sua média {$media}. Nunca foi azar, sempre foi Incompetência. Reprovado";
    } else {
        $mensagem = "Sua média {$media}. A vida é um conto de falhas. Recuperação";
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
        <div class="mensagem">
            <?php
               echo $mensagem;
            ?>
        </div>
        <a href="index.php"><button>Voltar</button></a>
    </main>
</body>
</html>

<!--<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <main>
        <div class="mensagem">

        </div>
    </main>
</body>
</html> -->
