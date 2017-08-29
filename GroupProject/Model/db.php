<?php

/* 
 * This contains all the database queries as well as a few
 * functions to parse information from the database if it
 * is data that will have to be parsed in multiple functions
 * e.g. parseReservationArray is used to parse the array of
 * values returned by queries into a reservation object
 */

//reservations
function parseReservationArray($reservationArray) {
    //parse results of reservation queries into reservation objects
    $reservation = new Reservation($reservationArray['resID'], $reservationArray['resDate'],
            $reservationArray['resTime'], $reservationArray['storeNum'],
            $reservationArray['custName'], $reservationArray['partySize'],
            $reservationArray['custPhone']);
    return $reservation;
}
function getAllReservations() {
    //get an array of all reservations
    global $db;
    $query = 'SELECT * FROM reservations';
    $statement = $db->prepare($query);
    $statement->execute();
    $result = $statement->fetchall();
    $reservations = array();
    foreach ($result as $reservationArray) {
        array_push($reservations, parseReservationArray($reservationArray));
    }
    return $reservations;
}
function getReservationByStoreNum($storeNum) {
    //get reservation by resID
    global $db;
    $query = 'SELECT * FROM reservations '
            . 'WHERE storeNum = :storeNum';
    $statement = $db->prepare($query);
    $statement->bindValue(':storeNum', $storeNum);
    $statement->execute();
    $result = $statement->fetch();
    $reservation = parseReservationArray($result);
    return $reservation;
}
function getReservationByResID($resID) {
    //get reservation by resID
    global $db;
    $query = 'SELECT * FROM reservations '
            . 'WHERE resID = :resID';
    $statement = $db->prepare($query);
    $statement->bindValue(':resID', $resID);
    $statement->execute();
    $result = $statement->fetch();
    $reservation = parseReservationArray($result);
    return $reservation;
}
function getReservationByPhoneNumber($custPhone) {
    //by phone number.. we may ditch this one or the next..
    global $db;
    $query = 'SELECT * FROM reservations '
            . 'WHERE custPhone = :custPhone';
    $statement = $db->prepare($query);
    $statement->bindValue(':custPhone', $custPhone);
    $statement->execute();
    $result = $statement->fetch();
    $reservation = parseReservationArray($result);
    return $reservation;
}
function getReservationByName($custName) {
    //by name
    global $db;
    $query = 'SELECT * FROM reservations '
            . 'WHERE custName = :custName';
    $statement = $db->prepare($query);
    $statement->bindValue(':custName', $custName);
    $statement->execute();
    $result = $statement->fetch();
    $reservation = parseReservationArray($result);
    return $reservation;
}

//users
function parseUserArray($userArray) {
    //parse result of user table queries into user objects
    $user = new User($userArray['userID'], $userArray['userRole'],
            $userArray['userName'], $userArray['userLogin'], 
            $userArray['userPassword'], $userArray['storeNum']);
    return $user;
}
function getAllUsers() {
    global $db;
    $query = 'SELECT * FROM users';
    $statement = $db->prepare($query);
    $statement->execute();
    $result = $statement->fetchall();
    $users = array();
    foreach ($result as $userArray) {
        array_push($users, parseReservationArray($userArray));
    }
    return $users;    
}
function getUserByStore($storeNum){
    global $db;
    $query = 'SELECT * FROM users '
            . 'WHERE storeNum = :storeNum';
    $statement = $db->prepare($query);
    $statement->bindValue(':storeNum', $storeNum);
    $statement->execute();
    $result = $statement->fetch();
    $users = parseUserArray($result);
    return $users;
}
function getUserByUserID($userID) {
    global $db;
    $query = 'SELECT * FROM users '
            . 'WHERE userID = :userID';
    $statement = $db->prepare($query);
    $statement->bindValue(':userID', $userID);
    $statement->execute();
    $result = $statement->fetch();
    $user = parseUserArray($result);
    return $user;
}
function getUserByUserLogin($userLogin) {
    //should userLogin be the primary key and ditch userID?
    global $db;
    $query = 'SELECT * FROM users '
            . 'WHERE userLogin = :userLogin';
    $statement = $db->prepare($query);
    $statement->bindValue(':userLogin', $userLogin);
    $statement->execute();
    $result = $statement->fetch();
    $user = parseUserArray($result);
    return $user;
}
function getServersByStore($storeNum){
    global $db;
    $query = 'SELECT * FROM servers '
            . 'WHERE storeNum = :storeNum';
    $statement = $db->prepare($query);
    $statement->bindValue(':storeNum', $storeNum);
    $statement->execute();
    $result = $statement->fetch();
    $servers = parseUserArray($result);
    return $servers;
}
function getServerByServerID($serverID) {
    global $db;
    $query = 'SELECT * FROM users '
            . 'WHERE serverID = :serverID';
    $statement = $db->prepare($query);
    $statement->bindValue(':serverID', $serverID);
    $statement->execute();
    $result = $statement->fetch();
    $servers = parseUserArray($result);
    return $servers;
}
