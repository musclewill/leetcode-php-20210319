class Solution {

    /**
     * @param String $s
     * @return Integer
     */

    function lengthOfLongestSubstring($s) {
        $max = 0;
        $current = '';
        $len=$i=0;
        for (;$i < strlen($s); $i++) {
            if (strpos($current, $s[$i]) !== false) {
                $current = substr($current, strpos($current, $s[$i])+1);
                $len = strlen($current);
            }
            $current .= $s[$i];
            $len++; 
            $max = max($max, $len);
        }
        
        return $max;
    }
    
    function lengthOfLongestSubstring_b($s) {
        $res = [];
        
        if( $s !== "") {
            $arrs = str_split($s);
            $size = sizeof($arrs);
            
            for($i = 0; $i < $size; $i++) {
                $tmpRes = [];
                array_push($tmpRes, $arrs[$i]);
                for($j = $i+1; $j < $size; $j++) {
                    
                    if (!in_array($arrs[$j], $tmpRes)) {
                        array_push($tmpRes, $arrs[$j]);
                    } else {
                        break;
                    }
                }
                if( sizeof($tmpRes) >= sizeof($res) ) {
                    $res = $tmpRes;
                }
                unset($tmpRes);
            }
        } else {
            return 0;
        }
        
        return sizeof($res);
    }
    
    
}
