<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Customer
 *
 * @author mm147988
 */
class Customer {
    public $customerId;
    public $customerName;
    public $partySize;
    
    //contstructor
    public function __construct($customerId, $customerName, $partySize) {
        $this->setCustomerId($customerId);
        $this->setCustomerName($customerName);
        $this->setPartySize($partySize);
    }
    
    //getters and setters
    public function setCustomerId($id) {
        $this->customerId = $id;
    }
    public function getCustomerId() {
        return $this->customerId;
    }
    
    public function setCustomerName($id) {
        $this->customerName = $id;
    }
    public function getCustomerName() {
        return $this->customerName;
    }

    public function setPartySize($partySize) {
        $this->partySize = $partySize;
    }
    public function getPartySize() {
        return $this->partySize;
    }
}
