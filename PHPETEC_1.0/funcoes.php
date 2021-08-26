<?php

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
                <div class="titulo">
                    <h2>Calcule a média de idade dos Alunos</h2>
                </div>
                <form action="calculo1.php" method = "POST">
                    <div class="aluno">
                        <label for="nome">Digite o nome do aluno </label>
                        <input type="text" class="campoTexto"  name="aluno" required/>

                        <label for="idade">Idade do aluno</label>
                        <input type="number" class="campoTexto"  name="idade1" required/>
                    </div>
                    <div class="aluno">
                        <label for="nome">Digite o nome do aluno </label>
                        <input type="text" class="campoTexto"  name="aluno" required/>

                        <label for="idade">Idade do aluno</label>
                        <input type="number" class="campoTexto"  name="idade2" required/>
                    </div>
                    <div class="aluno">
                        <label for="nome">Digite o nome do aluno </label>
                        <input type="text" class="campoTexto"  name="aluno" required/>

                        <label for="idade">Idade do aluno</label>
                        <input type="number" class="campoTexto"  name="idade3" required/>
                    </div>
                    <div class="aluno">
                        <label for="nome">Digite o nome do aluno </label>
                        <input type="text" class="campoTexto"  name="aluno" required/>

                        <label for="idade">Idade do aluno</label>
                        <input type="number" class="campoTexto"  name="idade4" required/>
                    </div>
                    <div class="aluno">
                        <label for="nome">Digite o nome do aluno </label>
                        <input type="text" class="campoTexto"  name="aluno" required/>

                        <label for="idade">Idade do aluno</label>
                        <input type="number" class="campoTexto"  name="idade5" required/>
                    </div>
                    <button class = "botao" type= "submit"> Calcule</button>
                </form>
            </main>
        </body>
            
        </html>
HTML;
}
///Leia um número e exiba os dez números anteriores e posteriores dando destaque ao numero digitado.

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
                <div class="titulo">
                    <h2>
                        Digite o número e descubra os 10 números anteriores e posteriores
                    </h2>
                </div>
                <form action="calculo2.php" method = "POST">
                    <label for="n1">digite o número</label>
                    <input type="number" class="campTexto" name="n1" required/>
                    <button class = "botao" type= "submit"> Calcule</button>
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
                <div class="titulo">
                    <h2>
                        Digite dois números inteiros para calcular: subtração, produto e o quociente entre eles.
                    </h2>
                </div>
                <form action="calculo3.php" method = "POST">
                    <div class="numero1">
                        <label for="n1">digite o número</label>
                        <input type="number" class="campTexto" name="n1" required/>
                    </div>
                    <div class="numero2">
                        <label for="n2">digite o número</label>
                        <input type="number" class="campTexto" name="n2" required/>
                    </div>
                    <button class = "botao" type= "submit"> Calcule</button>
                </form>
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
            <form action="curriculo01.php" method = "POST">
                <div class="cabecalho">
                    <p><h2>PREENCHA OS SEUS DADOS</h2></p>
                </div>
                <div class="pessoal">
                    <br>
                    <label for="nome">Nome:</label>
                    <input type="text" name="nome" required/>
                    <br>
                    <label for="nasc">Nascimento:</label>
                    <input type="text" name="nasc" required/>ex 00 / 00 / 0000)
                    <br>
                    <label for="est_civil">Estado Civil</label>
                    <select name="est_civil" id="">
                        <option value="Casado (a)">Casado (a)</option>
                        <option value="Solteiro (a)">Solteiro (a)</option>
                        <option value="Viuvo (a)">Viuvo (a)</option>
                        <option value="Divorcidado (a)">Divorciado (a)</option>
                    </select>
                    <br>
                    <label for="end">Endereço:</label>
                    <input type="text" name="end" required/>
                    <br>
                    <label for="num">Numero:</label>
                    <input type="text" name="num" required/>
                    <br>
                    <label for="bairro">Bairro:</label>
                    <input type="text" name="bairro" required/>
                    <br>
                    <label for="city">Cidade:</label>
                    <input type="text" name="city" required/>
                    <br>
                    <label for="estado">Estado:</label>
                    <input type="text" name="estado" required/>
                    <br>
                    <label for="cep">Cep:</label>
                    <input type="text" name="cep" required/>
                    <br>
                    <label for="telefone">Telefone:</label>
                    <input type="text" name="telefone" required/>
                    <br>
                    <label for="celular">Celular:</label>
                    <input type="text" name="celular" required/>
                    <br>
                    <label for="escolaridae">Escolaridade:</label>
                    <select name="escolaridade" id="">
                        <option value="Ensino Fundamental">Ensino Fundamental</option>
                        <option value="Ensino Medio">Ensino Medio</option>
                        <option value="Ensino Superior">Ensino Superior</option>
                        <option value="Ensino Fundamental Incompleto">Ensino Fundamental Incompleto</option>
                        <option value="Ensino Medio Incompleto">Ensino Medio Incompleto</option>
                        <option value="Ensino Superior Incompleto">Ensino Superior Incompleto</option>
                    </select>
                    <br>
                    <div class="profissional">
                        <div class="experiencia1">
                            <h1>EXPERIENCIAS</h1>
                            <br>
                            <label for="exp1_empresa">Empresa:</label>
                            <input type="text" name="exp1_empresa" required/>
                            <br>
                            <label for="exp1_entrada">Data de Inicio:</label>
                            <input type="text" name="exp1_entrada" required/>
                            <br>
                            <label for="exp1_saida">Data de Saída:</label>
                            <input type="text" name="exp1_saida" required/>
                            <br>
                            <label for="funcao1">Função:</label>
                            <input type="text" name="funcao1" required/>
                            <br>
                        </div>
                        <div class="experiencia2">
                            
                            <br>
                            <label for="exp2_empresa">Empresa:</label>
                            <input type="text" name="exp2_empresa" required/>
                            <br>
                            <label for="exp2_entrada">Data de Inicio:</label>
                            <input type="text" name="exp2_entrada" required/>
                            <br>
                            <label for="exp1_saida">Data de Saída:</label>
                            <input type="text" name="exp2_saida" required/>
                            <br>
                            <label for="funcao2">Função:</label>
                            <input type="text" name="funcao2" required/>
                            <br>
                        </div>
                        <div class="experiencia3">
                            
                            <br>
                            <label for="exp3_empresa">Empresa:</label>
                            <input type="text" name="exp3_empresa" required/>
                            <br>
                            <label for="exp3_entrada">Data de Inicio:</label>
                            <input type="text" name="exp3_entrada" required/>
                            <br>
                            <label for="exp1_saida">Data de Saída:</label>
                            <input type="text" name="exp3_saida" required/>
                            <br>
                            <label for="funcao3">Função:</label>
                            <input type="text" name="funcao3" required/>
                            <br>
                        </div>
                    </div>
                </div>
                <button class="botao" type="submit">Enviar</button>
            </form>
        </body>
HTML;
}
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
            <div class="titulo">
                <h2>
                    Digite os três coeficientes de uma equação de segundo grau para determinar suas raízes.
                </h2>
            </div>
            <form action="calculo5.php" method = "POST">
                <div class="numero1">
                    <label for="n1">digite o A</label>
                    <input type="number" class="campTexto" name="n1" required/>
                </div>
                <div class="numero2">
                    <label for="n2">digite o B</label>
                    <input type="number" class="campTexto" name="n2" required/>
                </div>
                <div class="numero3">
                    <label for="n2">digite o C</label>
                    <input type="number" class="campTexto" name="n3" required/>
                </div>
                <button class = "botao" type= "submit"> Calcule</button>
            </form>
        </main>
    </body>
HTML;
}
