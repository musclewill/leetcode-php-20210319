class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function romanToInt($s) {
        $sum = 0;
        $arrs = str_split($s);
        $count = count($arrs);
        $flag = false;
        
        $roman = array(
            'M' => 1000,
            'D' => 500,
            'C' => 100,
            'L' => 50,
            'X' => 10,
            'V' => 5,
            'I' => 1,
        );

        for( $i = 0; $i < $count; $i++ ) {
            switch ($arrs[$i]) {
                case 'M':
                    $flag = $this->check( $i, $arrs );
                    if( $flag ) {
                        $sum = $sum + ( $roman[$arrs[$i+1]] - $roman[$arrs[$i]] );
                        $i++;
                    } else {
                        $sum = $sum + 1000;
                    }
                    break;
                case 'D':
                    $flag = $this->check( $i, $arrs );
                    if( $flag ) {
                        $sum = $sum + ( $roman[$arrs[$i+1]] - $roman[$arrs[$i]] );
                        $i++;
                    } else {
                        $sum = $sum + 500;
                    }
                    break;
                case 'C':
                    $flag = $this->check( $i, $arrs );
                    if( $flag ) {
                        $sum = $sum + ( $roman[$arrs[$i+1]] - $roman[$arrs[$i]] );
                        $i++;
                    } else {
                        $sum = $sum + 100;
                    }
                    break;
                case 'L':
                    $flag = $this->check( $i, $arrs );
                    if( $flag ) {
                        $sum = $sum + ( $roman[$arrs[$i+1]] - $roman[$arrs[$i]] );
                        $i++;
                    } else {
                        $sum = $sum + 50;
                    }
                    break;
                case 'X':
                    $flag = $this->check( $i, $arrs );
                    if( $flag ) {
                        $sum = $sum + ( $roman[$arrs[$i+1]] - $roman[$arrs[$i]] );
                        $i++;
                    } else {
                        $sum = $sum + 10;
                    }
                    break;
                case 'V':
                    $flag = $this->check( $i, $arrs );
                    if( $flag ) {
                        $sum = $sum + ( $roman[$arrs[$i+1]] - $roman[$arrs[$i]] );
                        $i++;
                    } else {
                        $sum = $sum + 5;
                    }
                    break;
                case 'I':
                    $flag = $this->check( $i, $arrs );
                    if( $flag ) {
                        $sum = $sum + ( $roman[$arrs[$i+1]] - $roman[$arrs[$i]] );
                        $i++;
                    } else {
                        $sum = $sum + 1;
                    }
                    break;
            }
        }
        
        return $sum; 
    }
    

    

    
    function check( $tar, $arrs ) {

        $roman = array(
            'M' => 1000,
            'D' => 500,
            'C' => 100,
            'L' => 50,
            'X' => 10,
            'V' => 5,
            'I' => 1,
        );
        
        if( isset( $arrs[$tar+1] ) ) {
            // var_dump( $arrs[$tar] );
            // var_dump( $arrs[$tar+1] );
            
            // var_dump( $roman[$arrs[$tar]] );
            // var_dump( $roman[$arrs[$tar+1]] );
            
            if( $roman[$arrs[$tar+1]] > $roman[$arrs[$tar]] ) {
                // return $roman[$arrs[$tar+1]] - $roman[$arrs[$tar]];
                return true;
            } else {
                // return $roman[$arrs[$tar]];
                return false;
            }

        } else {
            return NULL;
        }
        
        // exit;
        
    }
    
    
    
    
    
    
}