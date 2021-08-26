<?php

if ($_POST) {
    $num01 = $_POST['n1'];
    $num02 = $_POST['n2'];
    $subtr = "";
    $multi = "";
    $quoci = "";

    $subtr = ($num01 - $num02);
    $multi = ($num01 * $num02);
    $quoci = ($num01 % $num02);
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
        <div class="conta">
            <h2>Subtração</h2>
            <br>
                <?php
                echo "{$num01} - {$num02} = " . $subtr;
                ?>
            </br>
        </div>
        <div class="conta">
            <h2>Multiplicação</h2>
            <br>
                <?php
                echo "{$num01} * {$num02} = " . $multi;
                ?>
            </br>
        </div>
        <div class="conta">
            <h2>Quociente</h2>
            <br>
                <?php
                echo "{$num01} % {$num02} = " . $quoci;
                ?>
            </br>
        </div>
        <br>
        <a class="botao" href="index.php">Voltar</a>
    </body>
    </html>