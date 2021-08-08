
<?php
/**
 * @author Edilson Gotardi Murbach
 */

/**1) Crie um array */
$array = array();

/**2) Popule este array com 7 números */
for ($i = 1; $i <= 7; $i++) {
    $array[$i] = rand(1, 999);
}

/**3) Imprima o número da posição 3 do array */
echo imprimirPosicao($array, 3);
function imprimirPosicao(array $array, int $i)
{
    foreach ($array as $k => $value) {
        if ($k == $i)
            return "O valor da {$i}° posição é: " . $value . "<br>";
    }
}

/**4) Crie uma variável com todas as posições do array no formato de string separado por vírgula */
$strArray = implode(',', array_values($array));

/**5) Crie um novo array a partir da variável no formato de string que foi criada e destrua o array anterior */
$newArray = explode(',', $strArray);
unset($array);

/**6) Crie uma condição para verificar se existe o valor 14 no array */
if (in_array(14, $newArray)) {
    echo "O valor 14 existe no array.<br>";
} else {
    echo "O valor 14 <b>NÃO EXISTE</b> no array. :\<br> ";
}

/**7) Faça uma busca em cada posição. 
 *    Se o número da posição atual for menor que o da posição anterior 
 *      (valor anterior que não foi excluído do array ainda), exclua esta posição
 */
echo "<pre>";
print_r($newArray);
echo "-------<br>";
foreach ($newArray as $key => $atual) {
    $anterior = isset($newArray[$key - 1]) ? $newArray[$key - 1] : 0;

    echo "Valor anterior: " . $anterior . "<br>";
    echo "Valor atual: " . $atual . "<br>";

    if ($atual < $anterior) {
        echo "Removendo a posição " . $newArray[$key] . "<br>";
        unset($newArray[$key]);
    }
    echo "###################<br>";
}
echo "________________<br><pre>";
print_r($newArray);

/**8) Remova a última posição deste array */
array_pop($newArray);
echo "________________<br><pre>";
print_r($newArray);

/**9) Conte quantos elementos tem neste array */
$qtdElementos = count($newArray);
echo $qtdElementos;

/**10) Inverta as posições deste array */
$reverse = array_reverse($newArray);
