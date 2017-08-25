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
    
    public function addReservation($customer) {
        $this->reservedWaits.push($customer);
    }
    
    public function add($customer) {
        $this->unreservedWaits.push($customer);
    }
    
    public function getWaitlist() {
        $waitlist = $this->reservedWaits;
        //append unreservedwaits
             
    }
}
