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
    $statement->closeCursor();
    
    return $reservations;
    
    }
    
public function getReservationsByPhone()
    {
        $db = Database::DBConnect();

        $custName = Reservation::setCustName();
        $custPhone = Reservation::setCustPhone();
        $partySize = Reservation::setPartySize();
        $resTime = Reservation::setResTime();
        $resDate = Reservation::setResDate();
        $storeNum = Reservation::setStoreNum();
    

    $query = 'Select * from reservations 
             where custPhone = :custPhone';
    
    $statement = $db->prepare($query);
    $statement->bindValue(':custName', $custName);
    $statement->bindValue(':custPhone',$custPhone);
    $statement->bindValue(':partySize' ,$partySize);
    $statement->bindValue(':resDate' , $resDate);
    $statement->bindValue(':resTime' , $resTime);
    $statement->bindValue('$storeNum', $storeNum);
    
    $statement->execute();
    $reservations = $statement->fetchall();
    $statement->closeCursor();
    
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
    $statement->closeCursor();
    
    }
    
public function getUserByUserLogin($login){
    
        $db = Database::DBConnect();

        $userRole = User::setUserRole();
        $userLogin = User::setUserLogin();
        $userName = User::setUserName();
        $userPassword = User::setUserPassword();
        $storeNum = User::setStoreNum();
        
    $query = 'SELECT * FROM users '
            . 'WHERE userLogin = :userLogin';
    
    $statement = $db->prepare($query);
    $statement->bindValue(':userRole', $userRole);
    $statement->bindValue(':userLogin', $userLogin);
    $statement->bindValue(':userName',$userName);
    $statement->bindValue(':userPassword' ,$userPassword);
    $statement->bindValue(':storeNum' , $storeNum);  
    $statement->execute();
    $reservations = $statement->fetchall();
    $statement->closeCursor();
    
    return $reservations;
    }
    
/*function getServersByStore($storeNum){
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
}*/
}