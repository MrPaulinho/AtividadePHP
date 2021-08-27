<?php

include("funcoes.php");

//*var_dump($_POST);

if ($_POST["opcao"] == "opcao1") {
    echo exer01();
}
elseif ($_POST["opcao"] == "opcao2") {
    echo exer02();
}
elseif ($_POST["opcao"] == "opcao3") {
    echo exer03();
}
?>
