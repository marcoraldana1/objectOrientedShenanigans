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

//added in Differentiation of First and Last Name
class Reservation {
    private $resID;
    private $customerFName;
    private $customerLName;
    private $resDate;
    private $resTime;
    private $storeNum;
    
    //constructor
    public function __construct($resID, $resDate, $resTime, $storeNum, $customerFName, $customerLName) {
        $this->setResID($resID);
        $this->setCustomerFName($customerFName);
        $this->setCustomerLName($customerLName);
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
    
    public function setCustomerFName($customerFName) {
        $this->customerFName = $customerFName;
    }
    public function getCustomerFName() {
        return $this->customerFName;
    }
    
    public function setCustomerLName($customerLName) {
        $this->customerLName = $customerLName;
    }
    
    public function getCustomerLName(){
        return $this->customerLName;
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
