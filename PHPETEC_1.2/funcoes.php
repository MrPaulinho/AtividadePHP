<?php


function exer01()
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
                    <h2>Informe o numero que deseja saber a tabuada do 1 até o 10</h2>
                </div>
                <form action="calculo01.php" method = "POST">
                    <div class="menu">
                        <label for="valor01">de qual número inteiro você quer saber a tabuada</label>
                        <input type="number" name="num01" value = "num01">
                    </div>
                    <button class="botao" type="submit">Enviar</button>
                </form>
            </main>
        </body>

    HTML;
}

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
                <div class="Developer">
                    <h3>Informe os números e saiba:</h3>
                </div>
                <form action="calculo02.php" method = "POST">
                    <div class="menu">
                        <label for="num01">Informe o número:</label>
                        <input type="number" name = "num01" value = "num01">
                    </div>
                    <br>
                    <div class="menu">
                        <label for="num02">Informe o número:</label>
                        <input type="number" name = "num02" value = "num02">
                    </div>
                    <br>
                    <div class="menu">
                        <label for="num03">Informe o número:</label>
                        <input type="number" name = "num03" value = "num03">
                    </div>
                    <br>
                    <div class="menu">
                        <label for="num04">Informe o número:</label>
                        <input type="number" name = "num04" value = "num04">
                    </div>
                    <br>
                    <div class="menu">
                        <label for="num05">Informe o número:</label>
                        <input type="number" name = "num05" value = "num05">
                    </div>
                    <br>
                    <div class="menu">
                        <label for="num06">Informe o número:</label>
                        <input type="number" name = "num06" value = "num06">
                    </div>
                    <br>
                    <div class="menu">
                        <label for="num07">Informe o número:</label>
                        <input type="number" name = "num07" value = "num07">
                    </div>
                    <br>
                    <div class="menu">
                        <label for="num08">Informe o número:</label>
                        <input type="number" name = "num08" value = "num08">
                    </div>
                    <br>
                    <div class="menu">
                        <label for="num09">Informe o número:</label>
                        <input type="number" name = "num09" value = "num09">
                    </div>
                    <br>
                    <div class="menu">
                        <label for="num10">Informe o número:</label>
                        <input type="number" name = "num10" value = "num10">
                    </div>
                    <br>
                    <button class="botao" type="submit">Enviar</button>
                </form>
            </main>
        </body>

    HTML;
}

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

            </main>
        </body>

    HTML;
}

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

            </main>
        </body>

    HTML;
}

?>
