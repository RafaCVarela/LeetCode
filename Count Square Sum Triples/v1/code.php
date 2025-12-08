<?php

class Solution {

    /**
     * @param Integer $n
     * @return Integer
     */
    function countTriples($n) {
        
        $count = 0;

        for($a=1; $a <= $n; $a++){
            for($b=1; $b <= $n; $b++){
                
                $c = sqrt(pow($a, 2) + pow($b, 2));

                if($c<=$n && $c-(int)$c === (double)0){
                    $count++;
                }
            }
        }

        return $count;
    }
}

$obj01 = new Solution();
echo "O número de triplas pitágoricas: " . $obj01->countTriples(5) . "\n";

$obj02 = new Solution();
echo "O número de triplas pitágoricas: " . $obj02->countTriples(190);

// var_dump(5.8309518948453-(int)5.8309518948453 === (double)0);

/*

1- O que são as triplas descritas?

    É um teorema de Pitágoras. Isto é, são triangulos retângulos.

2- Como contar-los?

    Através de um loop e outro interno,
    interar sobre 'a' e 'b' e achar 'c';

*/
