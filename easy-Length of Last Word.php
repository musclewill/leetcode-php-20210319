class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function lengthOfLastWord($s) {

        return $this->test1($s);
        
        // $arr = explode(" ", $s);
        // if( $s == " " ) {
        //     return 0;
        // }
        // else {
        //     for( $i=sizeof($arr)-1; $i>=0; $i-- ) {
        //         if( $arr[$i] != "") {
        //             return strlen( $arr[$i] );
        //         }
        //     }
        //     return 0;
        // }
        
    }
    
    
    
    function test1($s){
        $arr = explode(" ", $s);        
        if( $s == " " ) {
            return 0;
        }
        else {
            for( $i=sizeof($arr)-1; $i>=0; $i-- ) {
                if( $arr[$i] != "") {
                    return strlen( $arr[$i] );
                }
            }
            return 0;
        }
    }
    
}