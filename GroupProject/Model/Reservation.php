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
    public function __construct($resID, $resDate, $resTime, $storeNum, $customer) {
        $this->setResID($resID);
        $this->setCustomer($customer);
        $this->setResDate($resDate);
        $this->setResTime($resTime);
        $this->setStoreNum($storeNum);
    }
    
    //getters and setters
    public function setResID($resID) {
        $this->resID = $resID;
    }
    public function getResId() {
        return $this->resID;
    }
    
    public function setCustomer($customer) {
        $this->customer = $customer;
    }
    public function getCustomer() {
        return $this->customer;
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
}
