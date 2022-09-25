<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>A)</h3>
    <h3>--------------------</h3>
    <h3>Tabuada de 2</h3>
    <?php

    function Tabuada($Tabuada, $Valor)
    {
        $Contador = 0;

        while ($Contador <= $Valor) {

            $Resultado = $Tabuada * $Contador;
            echo ($Tabuada . " X " . $Contador . " = " . $Resultado) . "<br>";
            $Contador++;
        }
    }
    Tabuada(2, 10);

    ?>
    <br>
    <h3>B)</h3>
    <h3>--------------------</h3>
    <h3>Minha família =)</h3>
    <?php
    $lista_nome = array();

    $lista_nome[0] = "Edilson";
    $lista_nome[1] = "Antonia";
    $lista_nome[2] = "Caroline";
    $lista_nome[3] = "Fillipe";
    $lista_nome[4] = "Lucas";
    $lista_nome[5] = "Rafael";

    echo $lista_nome[0] . "<br>";
    echo $lista_nome[1] . "<br>";
    echo $lista_nome[2] . "<br>";
    echo $lista_nome[3] . "<br>";
    echo $lista_nome[4] . "<br>";
    echo $lista_nome[5] . "<br>";
    echo "<br>";
    echo "A iversão do vetor é" . "<br>";
    echo "<br>";
    echo $lista_nome[5] . "<br>";
    echo $lista_nome[4] . "<br>";
    echo $lista_nome[3] . "<br>";
    echo $lista_nome[2] . "<br>";
    echo $lista_nome[1] . "<br>";
    echo $lista_nome[0] . "<br>";

    ?>

    <h3>C)</h3>
    <h3>--------------------</h3>
    <?php

    $numeros = array(1, 2, 3, 4);

    foreach ($numeros as $value) {

        echo "Esse é o número " . "$value <br>";
    }
    if ($numeros[3] = $numeros[3]) {
        echo "O número" . " " .  $numeros[3] . " " . " é maior dentro desse vetor";
    }

    ?>


    <h3>D)</h3>
    <h3>--------------------</h3>
    <?php

    $cpf = "11122233300";

    $parte_um     = substr($cpf, 0, 3);
    $parte_dois   = substr($cpf, 3, 3);
    $parte_tres   = substr($cpf, 6, 3);
    $parte_quatro = substr($cpf, 9, 2);

    $monta_cpf = $parte_um . "." . $parte_dois . "." . $parte_tres . "-" . $parte_quatro;

    echo $monta_cpf;
    echo "<br>";
    echo "Este CPF tem: ";
    echo strlen($cpf);
    echo " " . "digitos";
    ?>

    <br>
    <h3>E)</h3>
    <h3>--------------------</h3>
    <?php

    $fahrenheit = 90;
    $celsius = ($fahrenheit - 32) / 18;
    $celsius = round($celsius, 3);              // usado para limitar a quantidade casas decimas, ou seja, pra não ficar infinito
    echo "A temperatura em fahrenheit de 90º já em Celsius é de :" . $celsius;
    echo "<br>";
    $fahrenheit = 77;
    $celsius = ($fahrenheit - 32) / 18;
    $celsius = round($celsius, 3);              // usado para limitar a quantidade casas decimas, ou seja, pra não ficar infinito
    echo "A temperatura em fahrenheit de 77º já em Celsius é de :" . $celsius;
    echo "<br>";
    $fahrenheit = 52;
    $celsius = ($fahrenheit - 32) / 18;
    $celsius = round($celsius, 3);              // usado para limitar a quantidade casas decimas, ou seja, pra não ficar infinito
    echo "A temperatura em fahrenheit de 52º já em Celsius é de :" . $celsius;
    echo "<br>";
    $fahrenheit = 12;
    $celsius = ($fahrenheit - 32) / 18;
    $celsius = round($celsius, 3);              // usado para limitar a quantidade casas decimas, ou seja, pra não ficar infinito
    echo "A temperatura em fahrenheit de 12º já em Celsius é de :" . $celsius;
    ?>

    <br>
    <h3>F)</h3>
    <h3>--------------------</h3>
    <?php

    //Falta so a Questão F

    
    function buscaTexto($texto, $busca) {
        $busca = array("João", "Lucas", "Rafael");

        foreach ($busca as $value) {

            echo "Os nomes cadastrados no Sistema são: " . "$value <br>";
        }
    }
    buscaTexto(2, 10);

    //$array = array(0 => 'blue', 1 => 'red', 2 => 'green', 3 => 'red');

    //$key = array_search('green', $array); // $key = 2;

    ?>


    <br>
    <h3>G)</h3>
    <h3>--------------------</h3>
    <?php


    if ($num_inteiro = array(10, 20, 30, 40)) {

        foreach ($num_inteiro as $value) {

            echo "Os números cadastrados no sistema: " . "$value <br>";
        }

        echo " A soma dos valores cadastrados é de" . " " . array_sum($num_inteiro);
    }
    echo "<br>";


    ?>



</body>

</html>