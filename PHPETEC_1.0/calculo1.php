<?php

    ///variaveis
if ($_POST) {
    $idade1 = $_POST['idade1'];
    $idade2 = $_POST['idade2'];
    $idade3 = $_POST['idade3'];
    $idade4 = $_POST['idade4'];
    $idade5 = $_POST['idade5'];


    $soma1 = ($idade1 + $idade2 + $idade3 + $idade4 + $idade5);
    $soma = $soma1 / 5;


    $mensagem1 = "<b> Resultado da soma é: </b>" . $soma1;
    $mensagem = "<b> Resultado da média é: </b>" . $soma;
}
?>
    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Calcule a idade</title>
        <link rel="" type="" href="">
    </head>
    <body>
        <main>
            <div class="painel">
                <h2>Resultado </h2><b></b>
                <div class="conteudo-painel">
                    <?php
                    echo $mensagem1;
                    echo $mensagem;
                    ?>
                    <p>
                        <a class="botao" href="index.php">Voltar</a>
                    </p>
                </div>
            </div>
        </main>
    </body>
    </html>



