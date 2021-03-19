class Solution {

    /**
     * @param Integer[] $prices
     * @return Integer
     */
    function maxProfit($prices) {

        $size = sizeof($prices);
        $profit = 0;
        $min = $prices[0];
        
        if( $prices == NULL || $size == 0 ) return 0;
        
        for($i=1; $i<$size; $i++) {
            if( $prices[$i] < $min ) {
                $min = $prices[$i];
            } else {
                if( $prices[$i] - $min > $profit ) {
                    $profit = $prices[$i] - $min;
                }
            }
        }
        
        return $profit;
    }
}