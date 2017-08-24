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
    private $resID;
    private $customer;
    private $resDate;
    private $resTime;
    private $storeNum;
    
    //constructor
    public function __construct($resID, $custName, $partySize, $resDate, $resTime, $storeNum, $custPhone = null) {
        $this->setResID($resID);
        $this->customer = new Customer($custName, $partySize, $custPhone);
        $this->setResDate($resDate);
        $this->setResTime($resTime);
        $this->setStoreNum($storeNum);
    }
    
    //getters and setters
    public function setResID($resID) {
        $this->resID = $resID;
    }
    public function getReservationId() {
        return $this->resID;
    }
    
    public function setCustName($custName) {
        $this->custName = $custName;
    }
    public function getCustName() {
        return $this->custName;
    }
    
    public function setCustPhone($custPhone) {
        $this->custPhone = $custPhone;
    }
    public function getCustPhone() {
        return $this->custPhone;
    }
    
    public function setResDate($resDate) {
        $this->resDate = $resDate;
    }
    public function getResDate() {
        return $this->resDate;
    }
    
    public function setResTime($resTime) {
        $this->resTime = $resTime;
    }
    public function getResTime() {
        return $this->resTime;
    }
    public function setStoreNum($storeNum) {
        $this->storeNum = $storeNum;
    }
    public function getStoreNum() {
        return $this->storeNum;
    }
    public function setPartySize($partySize) {
        $this->partySize = $partySize;
    }
    public function getPartySize() {
        return $this->partySize;
    }
}
