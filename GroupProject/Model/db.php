<?php
class DB{
/* 
 * This contains all the database queries as well as a few
 * functions to parse information from the database if it
 * is data that will have to be parsed in multiple functions
 * e.g. parseReservationArray is used to parse the array of
 * values returned by queries into a reservation object
 */

//reservations
public function getReservationsByStore()
    {
        $db = Database::DBConnect();

        $custName = Reservation::setCustName();
        $custPhone = Reservation::setCustPhone();
        $partySize = Reservation::setPartySize();
        $resTime = Reservation::setResTime();
        $resDate = Reservation::setResDate();
        $storeNum = Reservation::setStoreNum();
    

    $query = 'Select * from reservations 
             where storeNum = :storeNum';
    
    $statement = $db->prepare($query);
    $statement->bindValue(':custName', $custName);
    $statement->bindValue(':custPhone',$custPhone);
    $statement->bindValue(':partySize' ,$partySize);
    $statement->bindValue(':resDate' , $resDate);
    $statement->bindValue(':resTime' , $resTime);
    $statement->bindValue('$storeNum', $storeNum);
    
    $statement->execute();
    $reservations = $statement->fetchall();
    
    
    return $reservations;
    
    }


public static function addReservation(Reservation $reservation)
    {
        $db = Database::DBConnect();

        $custName = $reservation->getCustName();
        $custPhone = $reservation->getCustPhone();
        $partySize = $reservation->getPartySize();
        $resTime = $reservation->getResTime();
        $resDate = $reservation->getResDate();
        $storeNum = $reservation->getStoreNum();
    

    $query = 'Insert Into reservations (custName, custPhone, partySize, resDate, resTime, storeNum) 
        Values (:custName , :custPhone, :partySize, :resDate, :resTime, :storeNum)';
    
    $statement = $db->prepare($query);
    $statement->bindValue(':custName', $custName);
    $statement->bindValue(':custPhone',$custPhone);
    $statement->bindValue(':partySize' ,$partySize);
    $statement->bindValue(':resDate' , $resDate);
    $statement->bindValue(':resTime' , $resTime);
    $statement->bindValue(':storeNum', $storeNum);
    
    $statement->execute();
    
    }
    
function getReservationByStoreNum($storeNum) {
    //get reservation by resID
    $db = Database::DBConnect();
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
    $db = Database::DBConnect();
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
    $db = Database::DBConnect();
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
    $db = Database::DBConnect();
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
    $db = Database::DBConnect();
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
    $db = Database::DBConnect();
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
    $db = Database::DBConnect();
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
    $db = Database::DBConnect();
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
    $db = Database::DBConnect();
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
    $db = Database::DBConnect();
    $query = 'SELECT * FROM users '
            . 'WHERE serverID = :serverID';
    $statement = $db->prepare($query);
    $statement->bindValue(':serverID', $serverID);
    $statement->execute();
    $result = $statement->fetch();
    $servers = parseUserArray($result);
    return $servers;
}
}