<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Server
 *
 * @author mm147988
 */
class Server {
    public $serverId;
    public $storeNum;
    public $serverFName;
    public $serverLName;
    
    //constructor
    public function __construct($serverId, $serverName) {
        $this->setServerId($serverId);
        $this->setsStoreNum($storeNum);
        $this->setServerName($serverFName);
        $this->setServerName($serverLName);
    }
    
    //getters and setters
    public function setServerId($serverId) {
        $this->serverId = $serverId;
    } 
    public function getServerId() {
        return $this->serverId;
    }
    
    public function setStoreNum($storeNum) {
        $this->storeNum = $storeNum;
    }
    public function getStoreNum() {
        return $this->storeNum;
    }
    
    public function setServerFName($serverFName) {
        $this->serverFName = $serverFName;
    }
    public function getServerFName() {
        return $this->serverFName;
    }
        
    public function setServerLName($serverLName) {
        $this->serverLName = $serverLName;
    }
    public function getServerLName() {
        return $this->serverLName;
    }
}
