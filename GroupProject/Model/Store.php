<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Store
 *
 * @author mm147988
 */
class Store {
    private $storeID;
    private $num2pTables;
    private $num4pTables;
    private $num6pTables;
    private $num8pTables;
    
    public function __construct($storeID, $num2pTables, $num4pTables, $num6pTables, $num8pTables) {
        $this->setStoreID($storeID);
        $this->setNum2pTables($num2pTables);
        $this->setNum4pTables($num4pTables);
        $this->setNum6pTables($num6pTables);
        $this->setNum8pTables($num8pTables);
    }
    
    public function setStoreID($storeID) {
        $this->storeID = $storeID;
    }
    public function getStoreID() {
        return $this->storeID;
    }
    
    public function setNum2pTables($num2pTables) {
        $this->num2pTables = $num2pTables;
    }
    public function getNum2pTables($num2pTables) {
        return $this->num2pTables;
    }    
    
    public function setNum4pTables($num4pTables) {
        $this->num4pTables = $num4pTables;
    }
    public function getNum4pTables($num4pTables) {
        return $this->num4pTables;
    }

    public function setNum6pTables($num6pTables) {
        $this->num6pTables = $num6pTables;
    }
    public function getNum6pTables($num6pTables) {
        return $this->num6pTables;
    }
    
    public function setNum8pTables($num8pTables) {
        $this->num8pTables = $num8pTables;
    }
    public function getNum8pTables($num8pTables) {
        return $this->num8pTables;
    }
    
}
