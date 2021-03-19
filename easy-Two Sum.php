class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target) {
        $count = count($nums);
        $resArray = [];
        $sortedNums = $nums;
        
        sort($sortedNums);
        
        for( $i = 0; $i < $count; $i++ ) {
            $j = $count - 1;
            while( $i < $j ) {
                $sum = $sortedNums[$i] + $sortedNums[$j];
                if( $sum == $target) {
                    if( $sum == $sortedNums[$i] + $sortedNums[$i] ) {
                        $resArray = $this->duplicate($nums, $sortedNums[$i]);
                    } else {
                        array_push($resArray, array_search($sortedNums[$i], $nums), array_search($sortedNums[$j], $nums));
                    }
                    
                    return $resArray;
                } else {
                    $j--;
                }
            }
        }
        return $resArray;
    }
    
    function duplicate($nums, $dup_value) {
        $resArray = [];
        foreach($nums as $key => $val) {
            if( $val == $dup_value ) {
                array_push($resArray, $key);
            }
        }
        return $resArray;
    }
    
    
}