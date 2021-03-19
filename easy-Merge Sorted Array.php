class Solution {

    /**
     * @param Integer[] $nums1
     * @param Integer $m
     * @param Integer[] $nums2
     * @param Integer $n
     * @return NULL
     */
    function merge(&$nums1, $m, $nums2, $n) {
        
        $i = 0;
        $j = 0;
        $target = $m;
        
        if(empty($nums2)) return $nums1;
        
        while( $i < ($m+$n) ) {
            if( $nums1[$i] > $nums2[$j] ) {
                
                if($nums2[$j] == NULL && $j==$n) {
                    return $nums1;
                }
                
                array_splice( $nums1, $i, 0, $nums2[$j] );
                array_pop($nums1);
                $j++;
            } else {
                if($target == 0) {
                    array_splice( $nums1, $i, 0, $nums2[$j] );
                    array_pop($nums1);
                    $j++;
                } else {
                    $target--;                  
                }
            }
            $i++;            
        }
        
        return $nums1;
        
    }
}