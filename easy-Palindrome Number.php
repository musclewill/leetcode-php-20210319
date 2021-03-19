class Solution {

    /**
     * @param Integer $x
     * @return Boolean
     */
    function isPalindrome($x) {
        if( $x < 0 ) {
            return false;
        } else if ( $x == 0 ) {
            return true;
        } else {
            $len = strlen($x);
            $half_len = floor($len/2);
            $t = $x;
            $div = $len - 1;            
            
            for( $i = 0; $i < $half_len; $i++ ) {
                if( floor($t/pow(10, $div)) != $t % 10 ) return false;
                else {
                    $t = $t % pow(10, $div);
                    $t = floor($t/10);
                    $div = $div - 2;                    
                }
            }
            
            return true;            
        }
    }
    
    /**
     * @param Integer $x
     * @return Boolean
     */
    function isPalindrome_b($x) {
        if( $x < 0 ) {
            return false;
        } else if ( $x == 0 ) {
            return true;
        } else {
            $arrs = str_split($x);
            $count = count($arrs);
            $half_count = floor($count/2);
            $j = $count-1;
            
            for( $i = 0; $i < $half_count; $i++ ) {
                if( $arrs[$i] != $arrs[$j] ) return false;
                $j--;
            }
            
            return true;
        }
    }
    
}