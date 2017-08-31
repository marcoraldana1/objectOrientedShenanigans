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
    public function userNameExists($login)
    {
        $db = Database::DBConnect();

        $query = 'SELECT * FROM users WHERE userLogin = :login';
        $statement = $db->prepare($query);
        $statement->bindValue(':login', $login);
        $statement->execute();
        $row_count = $statement->rowCount();
        $statement->closeCursor();

        return $row_count;
    }
    
public function getUserByUserLogin($login){
    
    $db = Database::DBConnect();
        
    $query = 'SELECT * FROM users '
            . 'WHERE userLogin = :login';
    
    $statement = $db->prepare($query);
    $statement->bindValue(':login', $login);  
    $statement->execute();
    $reservations = $statement->fetch();
    $statement->closeCursor();
    
    return $reservations;
    }
    
public function getServersByStore($store_number){
    $db = Database::DBConnect();

    $serverID = Server::getServerID();
    $serverFName = Server::getServerFName();
    $serverLName = Server::getServerLName();
    $storeNum = Server::getStoreNum();
        
    $query = 'SELECT * FROM servers WHERE storeNum = :store_number';
    
    $statement = $db->prepare($query);
    $statement->bindValue(':store_number', $store_number);
    $statement->bindValue(':serverID', $serverID);
    $statement->bindValue(':serverFName',$serverFName);
    $statement->bindValue(':serverLName' ,$serverLName);
    $statement->bindValue(':storeNum' , $storeNum);  
    $statement->execute();
    $servers = $statement->fetchall();
    $statement->closeCursor();
    
    return $servers;
}

public static function addServer(Server $server)
    {
        $db = Database::DBConnect();

        $serverID = $server->getServerId();
        $
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
}
