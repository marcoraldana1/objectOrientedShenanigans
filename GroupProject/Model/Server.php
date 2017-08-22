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
    
    //this is an array of tableIds
    public $tableAssignments = array();
    
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
    
    //table assignments
    public function addAssignment($table) {
        //only add the table if it isn't already assigned to this server
        //note that this doesn't check if it is already assigned to another server
        if (array_search($table->getTableId, $this->tableAssignments)) {
            arary.push($this->tableAssignments, $table->getTableId);
        }
    }
    
    public function removeAssignment($table) {
        $i = 0;
        //copy all assignments that aren't the table we are removing
        //into a new array
        foreach ($this->tableAssignments as $tableId) :
            if ($table->getTableId !== $tableId) { 
                $tables[$i] = $tableId;
                $i++;
            }
        endforeach;
        //if there are any tables copied, store it
        if (isset($tables)) {
            $this->tableAssignments = $tables;
        }
        //otherwise clear 
        else {
            $this->tableAssignments = array();
        }
    }
}
