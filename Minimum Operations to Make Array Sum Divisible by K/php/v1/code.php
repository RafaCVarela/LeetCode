<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return Integer
     */
    
    public $count = 0;

    function minOperations($nums, $k) {
        
        // $len = count($nums);
        // echo $this->sum($nums)%$k;

        $sum = $this->sum($nums);
        
        if($sum%$k === 0){
            return $this->count;
        } elseif ($sum < $k){
            return $sum + $this->count;
        } else{
            $index = array_search(max($nums), $nums);
            $nums[$index] -= 1;

            $this->count += 1;
            return $this->minOperations($nums, $k);
        }
        
    }

    function sum($nums){

        $sum = 0;

        foreach($nums as $num){

            $sum += $num;

        }

        return $sum;
    }
}


// English - For tests
// Português - Para teste rode;
$codeObject = new Solution();

$answer = $codeObject->minOperations([5, 10, 15], 5);
echo $answer . "\n";

$answer = $codeObject->minOperations([3, 2], 6);
echo $answer . "\n";

$answer = $codeObject->minOperations([3, 9, 7], 5);
echo $answer . "\n";

$answer = $codeObject->minOperations([4, 1, 3], 4);
echo $answer . "\n";
