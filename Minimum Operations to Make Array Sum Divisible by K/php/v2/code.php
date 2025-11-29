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


// English - For tests run
// Português - Para teste rode;
$codeObject00 = new Solution();
$answer = $codeObject00->minOperations([5, 10, 15], 5);
echo $answer . "\n";

$codeObject01 = new Solution();
$answer = $codeObject01->minOperations([3, 2], 6);
echo $answer . "\n";

$codeObject02 = new Solution();
$answer = $codeObject02->minOperations([3, 9, 7], 5);
echo $answer . "\n";

$codeObject03 = new Solution();
$answer = $codeObject03->minOperations([4, 1, 3], 4);
echo $answer . "\n";
