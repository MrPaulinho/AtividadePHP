<?php
if ($_POST) {
    $num01 = $_POST ["num01"];
    $num02 = $_POST ["num02"];


    if ($num01 > $num02) {
        $mensagem = "{$num01} é maior";
    } else{
        $mensagem = "{$num02} é maior";
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
        <a href="index.php"><button>Voltar</button></a>
    </main>
</body>
</html> -->
