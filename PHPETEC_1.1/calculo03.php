<?php
    if ($_POST){
        $time1 = $_POST['time1'];
        $time2 = $_POST['time2'];
        $gol01 = $_POST['gol01'];
        $gol02 = $_POST['gol02'];


        if ($time1 == $time2){
            $mensagem = 'Você seleciou times iguais';
        }elseif($gol01 == $gol02){
            $mensagem = 'Empate!';
        }elseif($gol01 > $gol02){
            $mensagem = "time {$time1} ganhou!";
        }else{
            $mensagem = "time {$time2} ganhou!";
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

