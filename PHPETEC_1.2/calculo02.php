<?php

    /*variaveis*/

if ($_POST) {
    $num01 = $_POST ["num01"];
        for($i = 0; $i <= 10; $i++){
        echo "{$num01} x {$i} = ".($num01*$i). "<br>";
        }
}
?>
