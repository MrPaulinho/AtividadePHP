<?php

?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicios PHP</title>
</head>

<body>
    <main>
        <div class="painel">
            <h2>Exercícios de PHP</h2>
            <div class="conteudo-painel">
                <p>Esta aplicação tem como finalidade realizar as atividades propostas durante a aula.</p>
            </div>
        </div>
        <div class="painel">
            <h2>Selecione a seguir uma das atividades propostas:</h2>
            <div class="conteudo-painel">
                <form action="if.php" method="POST">
                    <ul>
                        <li><input  type="radio"
                                    name="opcao" 
                                    value="opcao1">1
                            – Elabore um algoritmo que calcule a idade média de 5 alunos.</li>
                        <li><input  type="radio" 
                                    name="opcao" 
                                    value="opcao2">2
                            - Leia um número e exiba os dez números anteriores e posteriores dando destaque ao
                            número digitado.</li>
                        <li><input  type="radio" 
                                    name="opcao"   
                                    value="opcao3">3
                            - Ler dois números inteiros e calcular: subtração, produto e o quociente entre eles.</li>
                        <li><input  type="radio" 
                                    name="opcao" 
                                    value="opcao4">4
                            - Faça um formulário de currículo e exiba em outra página o currículo formatado</li>
                        <li><input  type="radio" 
                                    name="opcao" 
                                    value="opcao5">5
                            - Ler os três coeficientes de uma equação de segundo grau e determinar suas raízes</li>
                    </ul>
                    <button class="botao" type="submit">Enviar</button>
                </form>
            </div>
        </div>
    </main>
</body>

</html>