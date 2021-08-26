<?php

if ($_POST) {
    $a = $_POST['n1'];
    $b = $_POST['n2'];
    $c = $_POST['n3'];
///delta
    $delta = ($b * $b) - ((4 * $a) * $c);
//Equação
    $x1 = (-$b + sqrt($delta)) / (2 * $a);
    $x2 = (-$b - sqrt($delta)) / (2 * $a);
//Exibindo os valores
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
            <h2>Valor de A</h2>
            <br>
                <?php
                echo "<strong>O valor de A é:</strong>" . $a;
                ?>
            </br>
        </div>
        <div class="conta">
            <h2>Valor de B</h2>
            <br>
                <?php
                echo "<strong>O valor de B é:</strong>" . $b;
                ?>
            </br>
        </div>
        <div class="conta">
            <h2>Valor de C</h2>
            <br>
                <?php
                echo "<strong>O valor de C é:</strong>" . $c;
                ?>
            </br>
        </div>
        <div class="conta">
            <h2>Valor de Delta</h2>
            <br>
                <?php
                echo "<strong>O valor de Delta é:</strong>" . $delta;
                ?>
            </br>
        </div>
        <div class="conta">
            <h2>Valor de X1</h2>
            <br>
                <?php
                echo "<strong>O valor de x1 é:</strong>" . $x1;
                ?>
            </br>
        </div>
        <div class="conta">
            <h2>Valor de X2</h2>
            <br>
                <?php
                echo "<strong>O valor de x2 é:</strong>" . $x2;
                ?>
            </br>
        </div>
        <br>
        <a class="botao" href="index.php"><button>Voltar</button></a>
    </body>
    </html>