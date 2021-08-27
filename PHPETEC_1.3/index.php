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
                        -Crie um programa que entre com os dados de altura e sexo de 10 pessoas.<br>
                        -Imprima na tela quantas pessoas são do sexo masculino e quantas pessoas são do sexo feminino.<br>
                        -E se essa altura é de um homem ou uma mulher<br>
                        -Mostre também qual é a maior altura<br></li>
                    <li><input  type="radio"
                                name="opcao"
                                value="opcao2"required>2
                        -Peça ao usuário para digitar vários nomes.
                        -Exiba na tela todos os nomes digitados,
                        porém de maneira invertida (do último para o primeiro).
                    <li><input  type="radio"
                                name="opcao"
                                value="opcao3"required>3
                        -Digite 5 números e verifique qual é o maior e o menor.</li>
                </ul>
                <button class="botao" type="submit" required>Enviar</button>
            </form>
        </div>
    </main>
</body>
</html>

