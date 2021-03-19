class Solution {

    /**
     * @param Integer[] $digits
     * @return Integer[]
     */
    function plusOne($digits) {        
        $size = sizeof($digits);
        $digits[$size-1] = $digits[$size-1] + 1;
        
        for( $i=$size-1; $i>=0; $i-- ) {
            if( $digits[$i] >= 10 ) {                
                $digits[$i] = 0;
                if($digits[$i-1] == NULL) {
                    array_unshift($digits , 1);
                } else {
                    $digits[$i-1] = $digits[$i-1] + 1;                  
                }
            }
        }
        
        return $digits;        
    }
}