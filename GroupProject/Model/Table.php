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

    public function getSeatingCapacity() {
        return $this->seatingCapacity;
    }

    public function setSeatingCapacity($seatingCapacity) {
        $this->seatingCapacity = $seatingCapacity;
    }

    public function getServerID() {
        return $this->serverID;
    }

    public function setServerID($serverID) {
        $this->serverID = $serverID;
    }

    public function getIsOccupied() {
        return $this->isOccupied;
    }

    public function setIsOccupied($isOccupied) {
        $this->isOccupied= $isOccupied;
    }

}
