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
    public $customerName;
    public $partySize;
    public $customerPhone;
    
    //contstructor
    public function __construct($customerName, $partySize, $customerPhone) {
        $this->setCustomerName($customerName);
        $this->setPartySize($partySize);
        $this->setCustomerPhone($customerPhone);
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
    
    public function setCustomerPhone($customerPhone = null) {
        $this->customerPhone = $customerPhone;
    }
    public function getCustomerPhone() {
        return $this->customerPhone;
    }

    public function setPartySize($partySize) {
        $this->partySize = $partySize;
    }
    public function getPartySize() {
        return $this->partySize;
    }
}
