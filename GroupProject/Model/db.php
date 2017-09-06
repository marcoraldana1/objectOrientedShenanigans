<?php

class DB {
    /*
     * This contains all the database queries as well as a few
     * functions to parse information from the database if it
     * is data that will have to be parsed in multiple functions
     * e.g. parseReservationArray is used to parse the array of
     * values returned by queries into a reservation object
     */

//reservations
    
    //rewrote to get reservations by parameter - Marco
    public function getReservationsByStore($storeNum) {
        $db = Database::DBConnect();

//        $custName = Reservation::setCustomerName();
//        $custPhone = Reservation::setCustomerPhone();
//        $partySize = Reservation::setPartySize();
//        $resTime = Reservation::setResTime();
//        $resDate = Reservation::setResDate();
//        $storeNum = Reservation::setStoreNum();


        $query = 'Select * from reservations 
             where storeNum = :storeNum';

        $statement = $db->prepare($query);
        
//        $statement->bindValue(':custName', $custName);
//        $statement->bindValue(':custPhone', $custPhone);
//        $statement->bindValue(':partySize', $partySize);
//        $statement->bindValue(':resDate', $resDate);
//        $statement->bindValue(':resTime', $resTime);
        
        $statement->bindValue(':storeNum', $storeNum);

        $statement->execute();
        $reservations = $statement->fetchall();
        $statement->closeCursor();

        return $reservations;
    }

    public function getReservationsByPhone() {
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
        $statement->bindValue(':custPhone', $custPhone);
        $statement->bindValue(':partySize', $partySize);
        $statement->bindValue(':resDate', $resDate);
        $statement->bindValue(':resTime', $resTime);
        $statement->bindValue('$storeNum', $storeNum);

        $statement->execute();
        $reservations = $statement->fetchall();
        $statement->closeCursor();

        return $reservations;
    }

    public static function addReservation(Reservation $reservation) {
        $db = Database::DBConnect();

        $custName = $reservation->getCustomerName();
        $custPhone = $reservation->getCustomerPhone();
        $partySize = $reservation->getPartySize();
        $resTime = $reservation->getResTime();
        $resDate = $reservation->getResDate();
        $storeNum = $reservation->getStoreNum();


        $query = 'Insert Into reservations (custName, custPhone, partySize, resDate, resTime, storeNum) 
        Values (:custName , :custPhone, :partySize, :resDate, :resTime, :storeNum)';

        $statement = $db->prepare($query);
        $statement->bindValue(':custName', $custName);
        $statement->bindValue(':custPhone', $custPhone);
        $statement->bindValue(':partySize', $partySize);
        $statement->bindValue(':resDate', $resDate);
        $statement->bindValue(':resTime', $resTime);
        $statement->bindValue(':storeNum', $storeNum);

        $statement->execute();
        $statement->closeCursor();
    }

    public static function userNameExists($login) {
        $db = Database::DBConnect();

        $query = 'SELECT * FROM users WHERE userLogin = :login';
        $statement = $db->prepare($query);
        $statement->bindValue(':login', $login);
        $statement->execute();
        $row_count = $statement->rowCount();
        $statement->closeCursor();

        return $row_count;
    }

    public static function getUserByUserLogin($login) {

        $db = Database::DBConnect();

        $query = 'SELECT * FROM users '
                . 'WHERE userLogin = :login';

        $statement = $db->prepare($query);
        $statement->bindValue(':login', $login);
        $statement->execute();
        $user = $statement->fetch();
        $statement->closeCursor();

        return $user;
    }
    
    //returns an array of server objects.. I rewrote this -- Michael
    public static function getServersByStore($store_number) {
        $db = Database::DBConnect();

        /*
        $serverID = Server::getServerID();
        $serverFName = Server::getServerFName();
        $serverLName = Server::getServerLName();
        $storeNum = Server::getStoreNum();
        */

        $query = 'SELECT * FROM servers WHERE storeNum = :store_number';

        $statement = $db->prepare($query);
        $statement->bindValue(':store_number', $store_number);
        $statement->execute();
        $results = $statement->fetchall();
        $statement->closeCursor();
        
        $servers = array();
        foreach ($results as $result) {
            $server = new Server($result['serverID'], $result['storeNum'],
                $result['serverFName'], $result['serverLName']);
            array_push($servers, $server);
        }

        return $servers;
    }

    //I rewrote this so that it works -- Michael
    public static function addServer($server) {
        $db = Database::DBConnect();

        $serverID = $server->getServerId();
        $storeNum = $server->getStoreNum();
        $serverFName = $server->getServerFName();
        $serverLName = $server->getServerLName();


        $query = 'Insert Into servers (serverID, storeNum, serverFName, serverLName) 
        Values (:serverID, :storeNum, :serverFName, :serverLName)';

        $statement = $db->prepare($query);
        $statement->bindValue(':serverID', $serverID);
        $statement->bindValue(':storeNum', $storeNum);
        $statement->bindValue(':serverFName', $serverFName);
        $statement->bindValue(':serverLName', $serverLName);
        

        $statement->execute();
        $statement->closeCursor();
    }
    
    //delete server by server ID.  --Michael
    public static function deleteServerByID($serverID) {
        $db = Database::DBConnect();
        
        $query = 'DELETE FROM Servers WHERE serverID = :serverID';
        $statement = $db->prepare($query);
        $statement->bindValue(':serverID', $serverID);
        $statement->execute();
        
    }
}
