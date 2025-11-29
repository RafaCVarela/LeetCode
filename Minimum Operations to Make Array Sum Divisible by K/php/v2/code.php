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

        $sum = array_sum($nums);
        
        if($sum%$k === 0){
            return $this->count;
        } else{
            $index = array_search(max($nums), $nums);
            $nums[$index] -= 1;

            $this->count += 1;
            return $this->minOperations($nums, $k);
        }
        
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
