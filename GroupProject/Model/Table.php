<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Table
 *
 * @author mm147988
 */
class Table {
    public $tableID;
    public $seatingCapacity;
    public $serverID;
    
    public function __construct($tableId, $seatingCapacity, $serverID = null) {
        $this->setTableId($tableId);
        $this->setSeatingCapacity($seatingCapacity);
        $this->assignServer($serverID);
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
    public function assignServer($serverID) {
        $this->serverID = $serverID;
    }
    public function unassignServer() {
        $this->serverID = null;
    }
}
