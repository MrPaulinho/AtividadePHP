<?php
    if ($_POST){
        $num01 = $_POST['num01'];

        if($num01 % 2 == 0){
            $mensagem = "Sabe a semalhança entre nós e {$num01}? Somos um belo Par rs <3";
          }else{
             $mensagem = " Esse número {$num01} é igual sua vida amorosa! Impar";
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
