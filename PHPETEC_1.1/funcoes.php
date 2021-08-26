<?php

/*– Escrever um algoritmo que leia o nome e as três notas obtidas por um aluno
durante o semestre. Calcular a sua média (aritmética), informar a menção:<br>
Aprovado (media >= 7) <br>
Reprovado (media <= 5) <br>
Recuperação (media entre 5.1 a 6.9).<br></li>*/
function exer()
{
    return <<<HTML
        <html lang="pt-BR">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
        </head>
        <body>
            <main>
                <form action="calculo01.php" method ="POST">
                <label for="materia">Selecione a matéria</label>
                    <select name="materia" id="" required >
                        <option value="">Selecione</option>
                        <option value="">Matemática</option>
                        <option value="">Português</option>
                        <option value="">Geografia</option>
                        <option value="">História</option>
                        <option value="">Inglês</option>
                        <option value="">Física</option>
                        <option value="">Química</option>
                        <option value="">Filosofia</option>
                        <option value="">Sociologia</option>
                        <option value="">Ed. Física</option>
                    </select>
                    <br>
                    <div class="nota01">
                        <label for="nota">Digite a primeira nota</label>
                        <input type="number" class="campoTexto"  name="num_01" required/>
                    </div>
                    <br>
                    <div class="nota02">
                        <label for="nota">Digite a segunda nota</label>
                        <input type="number" class="campoTexto"  name="num_02" required/>
                    </div>
                    <br>
                    <div class="nota03">
                        <label for="nota">Digite a terceira nota</label>
                        <input type="number" class="campoTexto"  name="num_03" required/>
                    </div>
                    <br>
                    <button class="botao" type="submit">Enviar</button>
                </form>
            </main>
        </body>

    HTML;
}

/*Faça um algoritmo que leia dois números A e B e imprima o maior deles.*/
function exer2()
{
    return <<<HTML
        <html lang="pt-BR">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
        </head>
        <body>
            <main>
                <div class="pergunta">
                    Você quer saber qual número é menor ou maior?
                </div>
                <form action="calculo02.php" method ="POST">
                    <div class="num01">
                        <label for="Numero">Digite o número</label>
                        <input type="Number" name="num01" required/>
                    </div>
                    <div class="num02">
                        <label for="Numero">Digite o número</label>
                        <input type="Number" name="num02" required/>
                    </div>
                    <br>
                    <button class="botao" type="submit">Enviar</button>
                </form>
            </main>
        </body>
    HTML;
}

/*Ler o nome de 2 times e o número de gols marcados na partida (para cada time).
Escrever o nome do vencedor. Caso não haja vencedor deverá ser impressa a palavra EMPATE*/
function exer3()
{
    return <<<HTML
        <html lang="pt-BR">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
        </head>
        <body>
            <main>
                <div class="pergunta">
                Ler o nome de 2 times e o número de gols marcados na partida (para cada time). <br>
                Escrever o nome do vencedor. Caso não haja vencedor deverá ser impressa a palavra EMPATE.
                </div>
                <form action="calculo03.php" method ="POST">
                    <br>
                    <div class="tim01" name = time1>
                    <label for="time1">Selecione o Time</label>
                        <select name="time1" id="" required >
                            <option value="">Selecione</option>
                            <option value="Capivaras da Norte" name="time1">Capivaras da Norte</option>
                            <option value="fogueteiro da Sul" name="time1">fogueteiro da Sul</option>
                            <option value="Carroça de Santana" name="time1">Carroça de Santana</option>
                            <option value="Campao da Leste" name="time1">Campao da Leste</option>
                            <option value="Playboys do Aquarius" name="time1">Playboys do Aquarius</option>
                        </select>
                        <br>
                        <label for="GOL">Gols</label>
                        <input type="Number" name="gol01" required/>
                    </div>
                    <br>
                    <div class="time2" name='time2'>
                        <label for="time2">Selecione o Time</label>
                        <select name="time2" id="" required >
                            <option value="">Selecione</option>
                            <option value="Capivaras da Norte" name="time2">Capivaras da Norte</option>
                            <option value="fogueteiro da Sul" name="time2">fogueteiro da Sul</option>
                            <option value="Carroça de Santana" name="time2">Carroça de Santana</option>
                            <option value="Campao da Leste" name="time2">Campao da Leste</option>
                            <option value="Playboys do Aquarius" name="time2">Playboys do Aquarius</option>
                        </select>
                        <br>
                        <label for="GOL">Gols</label>
                        <input type="Number" name="gol02" required/>
                    </div>
                    <br>
                    <button class="botao" type="submit">Enviar</button>
                </form>
            </main>
        </body>

    HTML;
}

/*Faça um Programa que peça um número inteiro e determine se ele é par ou impar.
Dica: utilize o operador módulo (resto da divisão).*/
function exer4()
{
    return <<<HTML
        <html lang="pt-BR">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
        </head>
        <body>
            <main>
                <form action="calculo04.php" method ="POST">
                    <div class="num01">
                        <label for="Numero">Digite o número</label>
                        <input type="Number" name="num01" required/>
                    </div>
                    <button class="botao" type="submit">Enviar</button>
                </form>
            </main>
        </body>

    HTML;
}

/*Tendo como dados de entrada a altura e o sexo de uma pessoa, construa um algoritmo que calcule seu peso ideal,
utilizando as seguintes fórmulas:
a) Para homens: (72.7*h) – 58 (h = altura)
b) Para mulheres: (62.1*h) - 44.7 (h = altura)
c) Peça o peso da pessoa e informe se ela está dentro, acima ou abaixo do peso.*/
function exer5()
{
    return <<<HTML
        <html lang="pt-BR">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
        </head>
        <body>
            <main>
                <div class="exercicio">
                    <p>Calculadora de IMC</p>
                    <br>
                </div>
                <form action="calculo05.php" method ="POST">
                    <div class="menu">
                        <label for="">Selecione o sexo de acordo com orgão sexual biológico</label>
                        <ul>
                            <li><input
                                type="radio"
                                name="opcao"
                                value="Masculino" required>
                                Órgão sexual biológico masculino
                            </li>
                            <li><input
                                type="radio"
                                name="opcao"
                                value="Feminino" required>
                                Órgão sexual biológico feminino
                            </li>
                        </ul>
                    </div>
                    <div class="calc-imc">
                        <label for="">Infome o Peso Kg:</label>
                        <input type="Number" name="peso" required/>
                        <br>
                        <label for="">Informe a Altura ex: 0.00: </label>
                        <input type="Number" step = "0.01" name="altura" required/>
                    </div>
                    <button class="botao" type="submit">Enviar</button>
                </form>
            </main>
        </body>

    HTML;
}
