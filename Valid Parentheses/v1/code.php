class Solution {

    /**
     * @param String $s
     * @return Boolean
     */
    function isValid($s) {
        $my_array = [
            '(', ')', '[', ']', '{', '}',
        ];

        $queue = [];
        $len = count($s);

        $curr = '';
        $last = '';
        $last_index = null;

        for($i=0; $i<$len; $i++){
            $curr = $s[$i];

            if(array_search($curr, $my_array)%2 !== 0 && $i=0){
                return false;
            }

            if()
        }
        

    }
}


/*

1- Como identificar se eh uma chave, um parenteses ou colchetes?

    De uma iteracao entrar em condicionais, que identificam os indices de nosso array

2- Como contar a quantidade de chaves?

    Aabrir uma fila, onde os indices precisam corresponder com a chave aberta.
    A cada item que fecharia, checar se corresponde.
    Se a fila ainda existir, retorna false, senao retorna true.

3- Como 

*/
