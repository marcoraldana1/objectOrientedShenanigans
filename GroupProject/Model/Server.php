<?php
/**
 * Description of Server
 *
 * @author mm147988
 */
class Server {
    private $serverId;
    private $storeNum;
    private $serverFName;
    private $serverLName;
    
    //constructor

    public function __construct($serverId, $storeNum, $serverFName, $serverLName) {
        $this->setServerId($serverId);
        $this->setStoreNum($storeNum);
        $this->setServerFName($serverFName);
        $this->setServerLName($serverLName);
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
