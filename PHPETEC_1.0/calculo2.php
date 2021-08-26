<?php

if ($_POST) {
    $n1 = $_POST['n1'];
    for ($i = 0; $i <= 10; $i++) {
        echo " " . ($n1 + $i);
    }
    echo " :valores posteriores: " . $n1;
    echo "<br/>";
    for ($i = 10; $i >= 0; $i -= 1) {
        echo " " . ($n1 - $i);
    }
    echo " :valores ateriores de " . $n1;
}
?>
    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="" type="" href="">
    </head>
    <body>
        <a class="botao" href="index.php">Voltar</a>
    </body>
    </html>