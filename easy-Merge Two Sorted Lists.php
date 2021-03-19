/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val = 0, $next = null) {
 *         $this->val = $val;
 *         $this->next = $next;
 *     }
 * }
 */
class Solution {

    /**
     * @param ListNode $l1
     * @param ListNode $l2
     * @return ListNode
     */
    
    function mergeTwoLists($l1, $l2) {
        
        if (empty($l1)) {
            return $l2;
        } elseif (empty($l2)) {
            return $l1;
        } elseif($l1->val < $l2->val) {
            $l1->next = $this->mergeTwoLists($l1->next, $l2);
            return $l1;
        } else {
            $l2->next = $this->mergeTwoLists($l1, $l2->next);
            return $l2;
        }
        
    }
    
    
    /*    
    public $res = array();
    
    function mergeTwoLists($l1, $l2) {
        
        if( $l1->val == null ) return $l2;
        if( $l2->val == null ) return $l1;
        
        // var_dump($l1->next->next->next->val);        
        // exit;
        
        // if( $l1->val < $l2->val ) {
        //     array_push($res, $l1->val);
        //     mergeTwoLists($l1->next, $l2);
        //     $l1->next = mergeTwoLists($l1->next, $l2);
        // } else {
        //     array_push($res, $l2->val);
        //     mergeTwoLists($l1, $l2->next);
        //     $l2->next = mergeTwoLists($l1, $l2->next);
        // }
        
        
            
        
        $final = $this->merge($l1, $l2);
        
        // array_push($res, $tmp);
        
        return $final;
        
        
    }
    
    function merge($l1, $l2) {
        
        if( $l1->val == null && $l2->val !== null) {
            array_push($res, $l2->val);
            $this->merge($l1, $l2->next);
        }
        
        if( $l2->val == null && $l1->val !== null ) {
            array_push($res, $l1->val);
            $this->merge($l1, $l2->next);
        }
        
        if( $l2->val == null && $l1->val == null ) {
            return $res;
        }
        
        if( $l1->val < $l2->val ) {
            array_push($res, $l1->val);
            var_dump("1111");exit;
            $this->merge($l1->next, $l2);            
        } else {
            array_push($res, $l2->val);
            var_dump( gettype($res) );var_dump($l2->val);var_dump("22222");exit;
            $this->merge($l1, $l2->next);
        }
        
        var_dump($res);exit;
        
        return $res;
        
        
    }
    */
    
}