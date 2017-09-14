<?php
/**
 * Description of Reservation
 *
 * @author mm147988
 */

//added in Differentiation of First and Last Name
class Reservation {
    //private $resID;
    public $customerName;
    public $resDate;
    public $resTime;
    public $storeNum;
    public $partySize;
    public $customerPhone;
    
    //constructor
    public function __construct(/*$resID,*/ $resDate, $resTime, $storeNum,
            $customerName, $partySize, $customerPhone) {
        //$this->setResID($resID);
        $this->setCustomerName($customerName);
        $this->setResDate($resDate);
        $this->setResTime($resTime);
        $this->setStoreNum($storeNum);
        $this->setPartySize($partySize);
        $this->setCustomerPhone($customerPhone);
        
    }
    
    //getters and setters
    public function setResID($resID) {
        if (is_numeric($resID)) {
            $this->resID = $resID;
        }
    }
    public function getResId() {
        return $this->resID;
    }
        
    public function setCustomerName($customerName) {
        $this->customerName = $customerName;
    }
    
    public function getCustomerName(){
        return $this->customerName;
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
        if (is_numeric($partySize)) {
            $this->partySize = $partySize;
        }
    }
    public function getPartySize() {
        return $this->partySize;
    }
    
    public function setCustomerPhone($customerPhone) {
        $this->customerPhone = $customerPhone;
    }
    public function getCustomerPhone() {
        return $this->customerPhone;
    }
    

    
}
