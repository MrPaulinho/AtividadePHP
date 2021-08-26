<!DOCTYPE html>
<html lang="pt-bt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TAREFAS</title>
</head>
<body>
    <main>
    <div class="painel">
            <h2>Exercícios de PHP</h2>
            <div class="titulo-painel">
                <p>Esta aplicação tem como finalidade realizar as atividades propostas durante a aula.</p>
            </div>
        </div>
        <div class="painel" required>
            <form action="ponte.php" method="POST" required>
                <ul required>
                    <li><input  type="radio"
                                name="opcao"
                                value="opcao1" required>1
                        – Crie um algoritmo que, dado um número informado pelo usuário,
                        imprima a tabuada dele de 1 a 10.<br></li>
                    <li><input  type="radio"
                                name="opcao"
                                value="opcao2"required>2
                        - Desenvolver um algoritmo que leia 10 valores e calcule e escreva:<br>
                           <li> a média aritmética dos valores lidos;<br>
                                a quantidade de valores positivos;<br>
                                a quantidade de valores negativos;<br>
                                e o percentual de valores negativos e positivos.;<br></li></li>
                    <li><input  type="radio"
                                name="opcao"
                                value="opcao3"required>3
                        - Escrever um algoritmo que leia 10 números e conte quantos deles
                            estão nos seguintes intervalos: [0-25], [26-50], [51-75] e [76-100]. </li>
                    <li><input  type="radio"
                                name="opcao"
                                value="opcao4"required>4
                        - Faça um algoritmo estruturado que leia 10 números positivos.
                        Calcule a quantidade de números pares e ímpares, a média de valores pares e a média
                        geral dos números lidos. </li>
                </ul>
                <button class="botao" type="submit" required>Enviar</button>
            </form>
        </div>
    </main>
</body>
</html>

<?php
