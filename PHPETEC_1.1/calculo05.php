<?php
    if($_POST ['opcao'] == "Masculino"){
        $altura = $_POST['altura'];
        $peso = $_POST['peso'];
        $peso1 = ("peso1");
        $peso2 = ("peso2");
        $peso3 = ("peso3");
        $peso4 = ("peso4");
        $peso5 = ("peso5");
        $peso6 = ("peso6");

        $conta1 = $altura*$altura;
		$conta2 = $peso/$conta1;

		$resultado = number_format($conta2, 2, ',');

            $peso1 = 18.5;
            $peso2 = 24.9;
            $peso3 = 29.9;
            $peso4 = 34.9;
            $peso5 = 39.9;
            $peso6 = 40;

        if($resultado <= $peso1){
            $mensagem = "Seu IMC é {$resultado}. Logo, está abaixo do peso";
        }
        elseif($resultado <= $peso2){
            $mensagem = "Seu IMC é {$resultado}. Logo, está no peso ideal";
        }
        elseif($resultado <= $peso3){
            $mensagem = "Seu IMC é {$resultado}. Logo, está com sobre-peso";
        }
        elseif($resultado <= $peso4){
            $mensagem = "Seu IMC é {$resultado}. Logo, está com Obesidade Grau 1";
        }
        elseif($resultado <= $peso5){
            $mensagem = "Seu IMC é {$resultado}. Logo, está com Obesidade Grau 2";
        }else{
            $mensagem = "Seu IMC é {$resultado}. Logo, está com Obesidade mórbida";
        }
    }
    if($_POST ['opcao'] == "Feminino"){
        $altura = $_POST['altura'];
        $peso = $_POST['peso'];
        $peso1 = ("peso1");
        $peso2 = ("peso2");
        $peso3 = ("peso3");
        $peso4 = ("peso4");
        $peso5 = ("peso5");
        $peso6 = ("peso6");

        $conta1 = $altura*$altura;
		$conta2 = $peso/$conta1;

		$resultado = number_format($conta2, 2, ',');

            $peso1 = 19.1;
            $peso2 = 23.9;
            $peso3 = 28.9;
            $peso4 = 34.9;
            $peso5 = 39.9;
            $peso6 = 40;

        if($resultado <= $peso1){
            $mensagem = "Seu IMC é {$resultado}. Logo, está abaixo do peso";
        }
        elseif($resultado <= $peso2){
            $mensagem = "Seu IMC é {$resultado}. Logo, está no peso ideal";
        }
        elseif($resultado <= $peso3){
            $mensagem = "Seu IMC é {$resultado}. Logo, está com sobre-peso";
        }
        elseif($resultado <= $peso4){
            $mensagem = "Seu IMC é {$resultado}. Logo, está com Obesidade Grau 1";
        }
        elseif($resultado <= $peso5){
            $mensagem = "Seu IMC é {$resultado}. Logo, está com Obesidade Grau 2";
        }else{
            $mensagem = "Seu IMC é {$resultado}. Logo, está com Obesidade mórbida";
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
