<?php
/**
 * Description of Customer
 *
 * @author mm147988
 */
class Customer {
    public $customerName;
    public $partySize;
    public $customerPhone;
    
    //is there any logic needed here?  this is just to hold the customer info
    //to be used by Reservation.php, Waitlist.php, and probably the controller
    
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
    
    public function setCustomerName($customerName) {
        $this->customerName = $customerName;
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
