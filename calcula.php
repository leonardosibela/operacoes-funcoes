<?php

    function somar($valorUm, $valorDois) {
        return $valorUm + $valorDois;
    }

    function subtrair($valorUm, $valorDois) {
        return $valorUm - $valorDois;
    }

    function multiplicar($valorUm, $valorDois) {
        return $valorUm * $valorDois;
    }

    function dividir($valorUm, $valorDois) {
        return $valorUm / $valorDois;
    }



    $numeroUm = $_POST["numeroUm"];
    $numeroDois = $_POST["numeroDois"];
    $operacao = $_POST["operacao"];

    if ($operacao == "somar") {
        $resultado = somar($numeroUm, $numeroDois);
    }

    if ($operacao == "subtrair") {
        $resultado = subtrair($numeroUm, $numeroDois);
    }

    if ($operacao == "multiplicar") {
        $resultado = multiplicar($numeroUm, $numeroDois);
    }

    if ($operacao == "dividir") {
        $resultado = dividir($numeroUm, $numeroDois);
    }

    header("location: form.php?resultado=" . $resultado);

    echo "$resultado";

?>