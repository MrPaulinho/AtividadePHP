<?php

    /*variaveis*/

if ($_POST) {
    $num01 = $_POST ["num01"];
        for($i = 0; $i <= 10; $i++){
        echo "{$num01} x {$i} = ".($num01*$i). "<br>";
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
        <a href="index.php"><button>Voltar</button></a>
    </main>
</body>
</html>
