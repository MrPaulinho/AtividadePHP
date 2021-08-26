<?php

if ($_POST) {
    $nome = $_POST['nome'];
    $nasc = $_POST['nasc'];
    $est_civil = $_POST['est_civil'];
    $end = $_POST['end'];
    $num = $_POST['num'];
    $bairro = $_POST['bairro'];
    $city = $_POST['city'];
    $estado = $_POST['estado'];
    $cep = $_POST['cep'];
    $telefone = $_POST['telefone'];
    $celular = $_POST['celular'];
    $escolaridade = $_POST['escolaridade'];
///primeiraempresa
    $exp1_empresa = $_POST['exp1_empresa'];
    $exp1_entrada = $_POST['exp1_entrada'];
    $exp1_saida = $_POST['exp1_saida'];
    $funcao1 = $_POST['funcao1'];
///segundaempresa
    $exp2_empresa = $_POST['exp2_empresa'];
    $exp2_entrada = $_POST['exp2_entrada'];
    $exp2_saida = $_POST['exp2_saida'];
    $funcao2 = $_POST['funcao2'];
///terceira
    $exp3_empresa = $_POST['exp3_empresa'];
    $exp3_entrada = $_POST['exp3_entrada'];
    $exp3_saida = $_POST['exp3_saida'];
    $funcao3 = $_POST['funcao3'];
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
        </head>
        <body>
                <div class="pessoal">
                    <br>
                    <?php
                    echo "Nome: " . $nome;
                    ?>
                    <br>
                    <?php
                    echo "Nascimento: " . $nasc;
                    ?>
                    <br>
                    <?php
                    echo "endereço: " . $est_civil;
                    ?>
                    <br>
                    <?php
                    echo "endereço: " . $end;
                    ?>
                    <br>
                    <?php
                    echo "Numero: " . $num;
                    ?>
                    <br>
                    <?php
                    echo "Bairro: " . $bairro;
                    ?>
                    <br>
                    <?php
                    echo "Cidade: " . $city;
                    ?>
                    <br>
                    <?php
                    echo "Estado: " . $estado;
                    ?>
                    <br>
                    <?php
                    echo "CEP: " . $cep;
                    ?>
                    <br>
                    <?php
                    echo "Telefone: " . $telefone;
                    ?>
                    <br>
                    <?php
                    echo "Celular: " . $celular;
                    ?>
                    <br>
                    <?php
                    echo "Escolaridade: " . $escolaridade;
                    ?>
                    <br>
                    <div class="profissional">
                        <div class="experiencia1">
                            <h1>EXPERIENCIAS</h1>
                            <br>
                            <?php
                            echo "Empresa: " . $exp1_empresa;
                            ?>
                            <br>
                            <?php
                            echo "Data de inicio: " . $exp1_entrada;
                            ?>
                            <br>
                            <?php
                            echo "Data de saída: " . $exp1_saida;
                            ?>
                            <br>
                            <?php
                            echo "Função: " . $funcao1;
                            ?>
                            <br>
                        </div>
                        <div class="experiencia2">
                            <br>
                            <?php
                            echo "Empresa: " . $exp2_empresa;
                            ?>
                            <br>
                            <?php
                            echo "Data de inicio: " . $exp2_entrada;
                            ?>
                            <br>
                            <?php
                            echo "Data de saída: " . $exp2_saida;
                            ?>
                            <br>
                            <?php
                            echo "Função: " . $funcao2;
                            ?>
                            <br>
                        </div>
                        <div class="experiencia3">                            
                            <?php
                            echo "Empresa: " . $exp3_empresa;
                            ?>
                            <br>
                            <?php
                            echo "Data de inicio: " . $exp3_entrada;
                            ?>
                            <br>
                            <?php
                            echo "Data de saída: " . $exp3_saida;
                            ?>
                            <br>
                            <?php
                            echo "Função: " . $funcao3;
                            ?>
                            <br>
                        </div>
                    </div>
                </div>
                <a href="index.php"><button class="botao" type="submit">Confirmar!</button></a>
            </form>
        </body>
        </html>