<?php

include("funcoes.php");

//*var_dump($_POST);

if ($_POST["opcao"] == "opcao1") {
    echo exer();
} if ($_POST["opcao"] == "opcao2") {
    echo exer2();
} if ($_POST["opcao"] == "opcao3") {
    echo exer3();
} if ($_POST["opcao"] == "opcao4") {
    echo exer4();
} if ($_POST["opcao"] == "opcao5") {
    echo exer5();
}
