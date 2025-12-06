<?php

class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function romanToInt($s) {
        
        // Array associativa contendo os valores
        $algarismos_romanos = [

            "M" => 1000,
            "D" => 500,
            "C" => 100,
            "L" => 50,
            "X" => 10,
            "V" => 5,
            "I" => 1

        ];

        // O tamanho da string
        $len = strlen($s);

        // O resultado da soma dos algarismos romanos
        $soma = 0;

        // Atravessar a string num loop for
        for($i=0 ; $i < $len; $i++){

            // Garantir que o algarismo existe na array
            if (in_array($s[$i], $algarismos_romanos)){
                return 0;
            }
            
            // Pegar um valor da string e o próximo.
            $num1 = $algarismos_romanos[$s[$i]];
            $num2 = ($i+1 === $len) ? 0 : $algarismos_romanos[$s[$i+1]];

            // Comparar um valor com outro
            if ($num1 < $num2){
                $soma += $num2 - $num1;
                $i++;
            } else {
                $soma += $num1;
            }
        }

        return $soma;
    }
}

$obj1 = new Solution();
echo "\nResultado final: " . $obj1->romanToInt("III") . "\n";

$obj2 = new Solution;
echo "\nResultado final: " . $obj2->romanToInt("MCMXCIV") . "\n";

/*

1- Como são escritos os números romanos?

    Por strings, "III" e "IX" e "LVIII".

2- Como transforma-los em inteiros?

    Primeiro, reconhecer a ordem dos números romanos:
        - A sua leitura começa na esquerda e termina na direita.
    Segundo, atravessar a string e converter cada algarismo num inteiro.

3- Quais são as situações adversas? Como soluciona-las?

    Quando um algarismo romano menor aparece antes do maior,
    deve-se converte-los para inteiros e subtrair-los.

*/
