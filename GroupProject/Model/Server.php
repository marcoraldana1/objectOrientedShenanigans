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
    public $serverName;
    
    //constructor
    public function __construct($serverId, $serverName) {
        $this->setServerId($serverId);
        $this->setServerName($serverName);
    }
    
    //getters and setters
    public function setServerId($serverId) {
        $this->serverId = $serverId;
    }
    public function getServerId() {
        return $this->serverId;
    }
    
    public function setServerName($serverName) {
        $this->serverName = $serverName;
    }
    public function getServername() {
        return $this->serverName;
    }
    
}
