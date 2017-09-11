<?php
/**
 * Description of Table
 *
 * @author mm147988
 */
class Table {
    public $tableID;
    public $seatingCapacity;
    public $serverID;
    public $isOccupied;
    
    public function __construct($tableId, $seatingCapacity, $serverID, $isOccupied) {
        $this->setTableId($tableId);
        $this->setSeatingCapacity($seatingCapacity);
        $this->setServerID($serverID);
        $this->setIsOccupied($isOccupied);
    }
    
    //getters and setters
    public function setTableId($tableID) {
        $this->tableID = $tableID;
    }
    public function getTableId() {
        return $this->tableID;
    }
    
    public function setSeatingCapacity($seatingCapacity) {
        $this->seatingCapacity = $seatingCapacity;
    }
    public function getSeatingCapacity() {
        return $this->seatingCapacity;
    }
    
    public function setServerID() {
        return $this->serverID;
    }
    public function getServerID($serverID) {
        $this->serverID = $serverID;
    }
     public function setIsOccupied() {
        return $this->isOccupied;
    }
    public function getIsOccupied($isOccupied) {
        $this->serverID = $serverID;
    }

    
}
