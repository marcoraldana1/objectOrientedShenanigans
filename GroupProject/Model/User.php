<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of User
 *
 * @author mm147988
 */
class User {
    private $userID;
    private $userRole;
    private $userName;
    private $userLogin;
    private $userPassword;
    private $storeNum;
    
    public function __construct($userID, $userRole, $userName, $userLogin, $userPassword, $storeNum) {
        $this->setUserID($userID);
        $this->setUserRole($userRole);
        $this->setUserName($userName);
        $this->setUserLogin($userLogin);
        $this->setUserPassword($userPassword);
        $this->setStoreNum($storeNum);
    }
    
    public function setUserID($userID) {
        $this->userID = $userID;
    }
    public function getUserID() {
        return $this->userID;
    }
    
    public function setUserRole($userRole) {
        $this->userRole = $userRole;
    }
    public function getUserRole() {
        return $this->userRole;
    }
    
    public function setUserName($userName) {
        $this->userName = $userName;
    }
    public function getUserName() {
        return $this->userName;
    }
    
    public function setUserLogin($userLogin) {
        $this->userLogin = $userLogin;
    }
    public function getUserLogin() {
        return $this->userLogin;
    }
    
    public function setUserPassword($userPassword) {
        $this->userPassword = $userPassword;
    }
    public function getUserPassword() {
        return $this->userPassword;
    }
    
    
    public function setStoreNum($storeNum) {
        $this->storeNum = $storeNum;
    }
    public function getStoreNum() {
        return $this->storeNum;
    }
    
    
}
