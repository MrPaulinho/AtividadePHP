<?php


    function exer01(){
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
                    <h2>Crie um programa que entre com os dados de altura e sexo de 10 pessoas.</h2><br/>
                        -Imprima na tela quantas pessoas são do sexo masculino e quantas pessoas são do sexo feminino.<br>
                        -Mostre também qual é a maior altura<br/>
                        -E se essa altura é de um homem ou uma mulher<br/>
                </div>
                <br/>
                <form action="calculo01.php" method = "POST">
                    <div class="menu">
                        <br/>
                        Altura:  <input type="number" name="num01" step = "0.01" required/><br/>
                        <select checkbox="genero1" name = "genero1" required>
                            <option name = "genero1" value="H">Homem</option>
                            <option name = "genero1" value="M">Mulher</option>
                        </select>
                    </div>
                    <br/>
                    <div class="menu">
                        <br/>
                        Altura:  <input type="number" name="num02" step = "0.01" required/><br/>
                        <select checkbox="genero2" name = "genero2" required>
                            <option name = "genero2" value="H">Homem</option>
                            <option name = "genero2" value="M">Mulher</option>
                        </select>
                    </div>
                    <br/>
                    <div class="menu">
                        <br/>
                        Altura:  <input type="number" name="num03" step = "0.01" required/><br/>
                        <select checkbox="genero3" name = "genero3" required>
                            <option name = "genero3" value="H">Homem</option>
                            <option name = "genero3" value="M">Mulher</option>
                        </select>
                    </div>
                    <br/>
                    <div class="menu">
                        <br/>
                        Altura:  <input type="number" name="num04" step = "0.01" required/><br/>
                        <select checkbox="genero4" name = "genero4" required>
                            <option name = "genero4" value="H">Homem</option>
                            <option name = "genero4" value="M">Mulher</option>
                        </select>
                    </div>
                    <br/>
                    <div class="menu">
                        <br/>
                        Altura:  <input type="number" name="num05" step = "0.01" required/><br/>
                        <select checkbox="genero5" name = "genero5" required>
                            <option name = "genero5" value="H">Homem</option>
                            <option name = "genero5" value="M">Mulher</option>
                        </select>
                    </div>
                    <br/>
                    <div class="menu">
                        <br/>
                        Altura:  <input type="number" name="num06" step = "0.01" required/><br/>
                        <select checkbox="genero6" name = "genero6" required>
                            <option name = "genero6" value="H">Homem</option>
                            <option name = "genero6" value="M">Mulher</option>
                        </select>
                    </div>
                    <br/>
                    <div class="menu">
                        <br/>
                        Altura:  <input type="number" name="num07" step = "0.01" required/><br/>
                        <select checkbox="genero7" name = "genero7" required>
                            <option name = "genero7" value="H">Homem</option>
                            <option name = "genero7" value="M">Mulher</option>
                        </select>
                    </div>
                    <br/>
                    <div class="menu">
                        <br/>
                        Altura:  <input type="number" name="num08" step = "0.01" required/><br/>
                        <select checkbox="genero8" name = "genero8" required>
                            <option name = "genero8" value="H">Homem</option>
                            <option name = "genero8" value="M">Mulher</option>
                        </select>
                    </div>
                    <br/>
                    <div class="menu">
                        <br/>
                        Altura:  <input type="number" name="num09" step = "0.01" required/><br/>
                        <select checkbox="genero9" name = "genero9" required>
                            <option name = "genero9" value="H">Homem</option>
                            <option name = "genero9" value="M">Mulher</option>
                        </select>
                    </div>
                    <br/>
                    <div class="menu">
                        <br/>
                        Altura:  <input type="number" name="num10" step = "0.01" required/><br/>
                        <select checkbox="genero10" name = "genero10" required>
                            <option name = "genero10" value="H">Homem</option>
                            <option name = "genero10" value="M">Mulher</option>
                        </select>
                    </div>
                    <br/>
                    <button class="botao" type="submit">Enviar</button>
                </form>
            </main>
        </body>

    HTML;

    }

    function exer02(){

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

                </form>
            </main>
        </body>

    HTML;
    }

    function exer03(){

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

                </form>
            </main>
        </body>

    HTML;
    }

?>
