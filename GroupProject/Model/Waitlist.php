<?php
/**
 * Description of Waitlist
 *
 * @author mm147988
 */
class Waitlist {
    //rather than use two arrays, it would be better to
    //use a linked list, but I doubt I would have time to
    //implement that before this is due..
    private $reservedWaits;
    private $unreservedWaits;
    
    public function __construct() {
        $this->reservedWaits = array();
        $this->unreservedWaits = array();
    }
    

    
    //add customer, $withReservation should be true if they have a reservation
    public function add($customer, $withReservation = null) {
        if ($withReservation == true) {
            array_push($this->reservedWaits,$customer);
        }
        else {
            array_push($this->unreservedWaits,$customer);
        }
    }
    
    //get the whole waitlist array, or a specific index
    public function getWaitlist($index = null) {
        //full wait list starts with those with reservations, and then those without
        $waitlist = array();
        foreach ($this->reservedWaits as $wait) {
            array_push($waitlist, $wait);
        }
        
        foreach ($this->unreservedWaits as $wait) {
            array_push($waitlist, $wait);
        }
        
        //if there is no index specified, return the whole waitlist
        if ($index == null) {
            return $waitlist;
        }
        //otherwise, return just the Nth customer in the waitlist
        else {
            return $waitlist[$index];
        }
    }
    
    public function removeWaitByIndex($index) {
        $reserves = count($this->reservedWaits);
        $i = 0;
        $new = array();
        //if the customer doesn't have a reservation..
        if ($index >= $reserves) {
            $index -= $reserves;
            
            if ($index >= count($this->unreservedWaits)) {
                //this shouldn't happen if index is valid
                return;
            }
            
            //go through all the waits and copy all except $index (reindexes)
            foreach($this->unreservedWaits as $wait) {
                if ($i != $index) {
                    $new[$i] = $wait;
                }
                $i++;
            }
            $this->unreservedWaits = $new;
        }
        //if they do have a reservation
        else {
            foreach($this->reservedWaits as $wait) {
                if ($i != $index) {
                    $new[$i] = $wait;
                }
                $i++;
            }
            $this->reservedWaits = $new;
        }
    }
    
    //remove a customer from the waitlist and return true, return false if failed
    public function removeFromWaitlist($customer) {
        $new = array();
        $i = 0;
        //if they have a reservation, and are in the wait list
        if ($index = array_search($customer, $this->reservedWaits) !== false) {
            //remove them
            foreach($this->reservedWaits as $wait) {
                if ($wait != $customer) {
                    $new[$i] = $wait;
                }
                $i++;
            }
            $this->reservedWaits = $new;
            //and return 1
            return true;
        }
        //no reservation, but in the waitlist
        elseif ($index = array_search($customer, $this->unreservedWaits) !== false) {
            foreach($this->unreservedWaits as $wait) {
                if ($wait != $customer) {
                    $new[$i] = $wait;
                }
                $i++;
            }
            $this->unreservedWaits = $new;
            return true;
        }
        //not in the waitlist
        else return false;
    }
}
