<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Waitlist
 *
 * @author mm147988
 */
class Waitlist {
    private $reservedWaits;
    private $unreservedWaits;
    
    public function __construct() {
        $this->reservedWaits = array();
        $this->unreservedWaits = array();
    }
    

    
    //add customer, $withReservation should be true if they have a reservation
    public function add($customer, $withReservation = null) {
        if ($withreservation == true) {
            array_push($this->reservedWaits,$customer);
        }
        else {
            array_push($this->unreservedWaits,$customer);
        }
    }
    
    //get the whole waitlist array, or a specific index
    public function getWaitlist($index = null) {
        //full wait list starts with those with reservations, and then those without
        $waitlist = array_merge($this->reservedWaits, $this->unreservedWaits);
        
        //if there is no index specified, return the whole waitlist
        if ($index == null) {
            return $waitlist;
        }
        //otherwise, return just the Nth customer in the waitlist
        else {
            return $waitlist[$index];
        }
    }
    
    //remove a customer from the waitlist and return true, return false if failed
    public function removeFromWaitlist($customer) {
        //if they have a reservation, and are in the wait list
        if ($index = array_search($customer, $this->reservedWaits) !== false) {
            //remove them
            unset($this->reservedWaits[$index]);
            //and return 1
            return true;
        }
        //no reservation, but in the waitlist
        elseif ($index = array_search($customer, $this->unreservedWaits) !== false) {
            unset($this->unreservedWaits[$index]);
            return true;
        }
        //not in the waitlist
        else return false;
    }
}
