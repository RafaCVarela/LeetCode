<?php

class Solution {

    /**
     * @param String[] $strs
     * @return String
     */


    function longestCommonPrefix($strs) {
        
        $lens = array_map('strlen', $strs);
        $min_len = min($lens);
        
        $count_words = count($strs);

        $prefix = "";

        if(empty($strs[0])){
    		    return "";
        }
        if($count_words === 1){
            return $strs[0];
        }

        for($i=0; $i < $min_len; $i++ ){
            $current_letter = $strs[0][$i];

            for($j=1; $j<$count_words; $j++){
                if($current_letter !== $strs[$j][$i]){
                    return $prefix;
                }
            }

            $prefix = $prefix . $current_letter;
        }
        return $prefix;
    }
}

$obj01 = new Solution();
echo "Prefixo mais comum é: " . $obj01->longestCommonPrefix(["flower","flow","flight"]) . "\n";

/*

1- O que é um prefixo?

    É o morfema incial de uma palavra, seus tamanho podem
    variar, pode haver um ou mais sílabas.

2- Como contar os prefixos?

    Pegar a primeira letra da primeira palavra,
    comparar com as demais primeira letras das outras palavras,
    se houver correspondencia, recurssivamente ou iterativamente, chama novamente a função ou a proxima letra,
    senão, retornar a string, vazia ou com a correspondecia até então.


*/
