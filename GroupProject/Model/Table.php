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
    public $tableId;
    public $seatingCapacity;
    
    public function __construct($tableId, $seatingCapacity) {
        $this->setTableId($tableId);
        $this->setSeatingCapacity($seatingCapacity);
    }
    
    //getters and setters
    public function setTableId($tableId) {
        $this->tableId = $tableId;
    }
    public function getTableId() {
        return $this->tableId;
    }
    
    public function setSeatingCapacity($seatingCapacity) {
        $this->seatingCapacity = $seatingCapacity;
    }
    public function getSeatingCapacity() {
        return $this->seatingCapacity;
    }
}
