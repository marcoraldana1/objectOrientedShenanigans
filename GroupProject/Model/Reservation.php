<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Reservation
 *
 * @author mm147988
 */
class Reservation {
    public $reservationId;
    public $customer;
    
    //constructor
    public function __construct($reservationId, $customer) {
        $this->setReservationId($reservationId);
        $this->setCustomer($customer);
    }
    
    //getters and setters
    public function setReservationId($reservationId) {
        $this->reservationId = $reservationId;
    }
    public function getReservationId() {
        return $this->reservationId;
    }
    
    public function setCustomer($customer) {
        $this->customer = $customer;
    }
    public function getCustomer() {
        return $this->customer;
    }
}
