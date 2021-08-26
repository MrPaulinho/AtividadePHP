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
                        – Escrever um algoritmo que leia o nome e as três notas obtidas por um aluno
                        durante o semestre. Calcular a sua média (aritmética), informar a menção:<br>
                        Aprovado (media >= 7) <br>
                        Reprovado (media <= 5) <br>
                        Recuperação (media entre 5.1 a 6.9).<br></li>
                    <li><input  type="radio"
                                name="opcao"
                                value="opcao2"required>2
                        - Faça um algoritmo que leia dois números A e B e imprima o maior deles.</li>
                    <li><input  type="radio"
                                name="opcao"
                                value="opcao3"required>3
                        - Ler o nome de 2 times e o número de gols marcados na partida (para cada time).
                        Escrever o nome do vencedor.
                        Caso não haja vencedor deverá ser impressa a palavra EMPATE.</li>
                    <li><input  type="radio"
                                name="opcao"
                                value="opcao4"required>4
                        - Faça um Programa que peça um número inteiro e determine se ele é par ou impar.
                        Dica: utilize o operador módulo (resto da divisão).</li>
                    <li><input  type="radio"
                                name="opcao"
                                value="opcao5"required>5
                        - Tendo como dados de entrada a altura e o sexo de uma pessoa, construa
                        um algoritmo que calcule seu peso ideal,
                        utilizando as seguintes fórmulas: <br>
                        a - Para homens: (72.7*h) – 58 (h = altura) <br>
                        b - Para mulheres: (62.1*h) - 44.7 (h = altura) <br>
                        c - Peça o peso da pessoa e informe se ela está dentro, acima ou abaixo do peso. <br> </li>
                </ul>
                <button class="botao" type="submit" required>Enviar</button>
            </form>
        </div>
    </main>
</body>
</html>

<?php
