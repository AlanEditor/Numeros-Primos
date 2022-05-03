<?php

//Declaração da Variavel
$numInicial;
$numFinal;


//Verifica se as keys existem, caso existam, atribui as variaveis $numInicial e $numFinal os valores das keys; caso não existam, atribui um valor padrao
isset($_GET['inicial']) ? $numInicial = $_GET['inicial'] : $numInicial = 1;
isset($_GET['final']) ? $numFinal = $_GET['final'] : $numFinal = 1;

echo calcularPrimo($numInicial, $numFinal);



//---------------------------------

function calcularPrimo($inicial, $final)
{
    $numPrimo = [];

    for($i = $inicial; $i < $final; $i++)
    {
        $numDivisores = 0;

        for($j = $i; $j >= 1; $j--)
        {
            if($i % $j == 0)
            {
                $numDivisores++;
            }
        }

        if($numDivisores == 2)
        {
            array_push($numPrimo, $i);
        }
    }

    echo '[ ';
    foreach($numPrimo as $valor)
    {
        echo $valor. ', ';
    }
    echo '] ';
}




?>