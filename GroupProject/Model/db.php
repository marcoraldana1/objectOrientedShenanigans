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

    public function updateReservation($custName, $custPhone, $partySize, $date, $time) {
        $db = Database::DBConnect();

        $query = 'UPDATE reservations '
                . 'Set custPhone = :custPhone, partySize = :partySize, resDate = :date, resTime= :time '
                . 'Where custName = :custName';

        $statement = $db->prepare($query);
        $statement->bindValue(':custName', $custName);
        $statement->bindValue(':custPhone', $custPhone);
        $statement->bindValue(':partySize', $partySize);
        $statement->bindValue(':date', $date);
        $statement->bindValue(':time', $time);

        $statement->execute();
        $statement->closeCursor();
    }
    public function deleteReservation($custName) {
        $db = Database::DBConnect();

        $query = 'DELETE FROM reservations WHERE custName = :custName';
        $statement = $db->prepare($query);
        $statement->bindValue(':custName', $custName);

        $statement->execute();
        $statement->closeCursor();
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

    public function getUserByUserLogin($login) {

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
    public function getServersByStore($store_number) {
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
        //this does not make an object that can be used with getters and setters
        $servers = array();
        foreach ($results as $result) {
            $server = new Server($result['serverID'], $result['storeNum'], $result['serverFName'], $result['serverLName']);
            array_push($servers, $server);
        }

        return $servers;
    }

    public static function findServerByID($serverID) {
        $db = Database::DBConnect();

        $query = 'Select * from servers
                        where serverID = :serverID';

        $statement = $db->prepare($query);
        $statement->bindValue(':serverID', $serverID);

        $statement->execute();
        $row = $statement->fetchall();

        $statement->closeCursor();
        return $row;
    }

    //I rewrote this so that it works -- Michael
    public function addServer($server) {
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
    public function deleteServerByID($serverID) {
        $db = Database::DBConnect();

        $query = 'DELETE FROM Servers WHERE serverID = :serverID';
        $statement = $db->prepare($query);
        $statement->bindValue(':serverID', $serverID);
        $statement->execute();
    }

    //updated this to reflect Joe's new tables table
    public function getTablesByStore($storeNum) {
        $db = Database::DBConnect();

        $query = 'Select * from tables 
             where storeNumber = :storeNum';

        $statement = $db->prepare($query);

        $statement->bindValue(':storeNum', $storeNum);

        $statement->execute();
        $tables = $statement->fetchall();
        $statement->closeCursor();

        return $tables;
    }

    public function getTableServerByStore($tableID, $storeNum) {
        $db = Database::DBConnect();

        $query = 'Select serverID from tables  
             where storeNum = :storeNum AND 
             tableID = :tableID';

        $statement = $db->prepare($query);

        $statement->bindValue(':storeNum', $storeNum);
        $statement->bindValue(':tableID', $tableID);

        $statement->execute();
        $row = $statement->fetch();
        $statement->closeCursor();

        return $row;
    }

    public static function setTableServerByID($serverID, $tableID, $storeNum) {
        $db = Database::DBConnect();

        $query = 'UPDATE  tables
                        SET serverID = :serverID
                        where tableID = :tableID AND storeNum = :storeNum';

        $statement = $db->prepare($query);

        $statement->bindValue(':serverID', $serverID);
        $statement->bindValue(':tableID', $tableID);
        $statement->bindValue(':storeNum', $storeNum);

        $statement->execute();

        $statement->closeCursor();
    }

    public static function checkIfTableSat($tableID, $storeNum) {
        $db = Database::DBConnect();

        $query = 'select isOccupied from tables
                        where tableID = :tableID AND storeNum = :storeNum';

        $statement = $db->prepare($query);

        $statement->bindValue(':tableID', $tableID);
        $statement->bindValue(':storeNum', $storeNum);

        $statement->execute();
        $table = $statement->fetch();
        $statement->closeCursor();

        if ($table[0] == 0) {
            return false;
        } else if ($table[0] == 1) {
            return true;
        }
    }

    public static function getTotalTablesForRestaurant($storeNum) {
        $db = Database::DBConnect();

        $query = 'select num2pTables, num4pTables, num6pTables, num8pTables
                    from store
                    where storeID = :storeNum';

        $statement = $db->prepare($query);

        $statement->bindValue(':storeNum', $storeNum);

        $statement->execute();
        $tables = $statement->fetch();
        $statement->closeCursor();

        return $tables;
    }

    public static function checkIfTableAssigned($tableID, $storeNum) {
        $db = Database::DBConnect();

        $query = 'select serverID from tables
                        where tableID = :tableID AND storeNum = :storeNum';

        $statement = $db->prepare($query);

        $statement->bindValue(':tableID', $tableID);
        $statement->bindValue(':storeNum', $storeNum);

        $statement->execute();
        $table = $statement->fetch();
        $statement->closeCursor();

        if (is_null($table[0])) {
            return false;
        } else {
            return true;
        }
    }

    public static function setIsOccupiedOnTable($tableID, $storeNum, $isOccupied) {
        $db = Database::DBConnect();

        $query = 'update tables
                        set isOccupied = :isOccupied
                        where tableID = :tableID AND storeNum = :storeNum';

        $statement = $db->prepare($query);

        $statement->bindValue(':isOccupied', $isOccupied);
        $statement->bindValue(':tableID', $tableID);
        $statement->bindValue(':storeNum', $storeNum);

        $statement->execute();

        $statement->closeCursor();
    }

    public static function returnIsOccupied($tableID, $storeNum) {
        $db = Database::DBConnect();

        $query = 'select isOccupied from tables
                        where tableID = :tableID AND storeNum = :storeNum';

        $statement = $db->prepare($query);

        $statement->bindValue(':tableID', $tableID);
        $statement->bindValue(':storeNum', $storeNum);

        $statement->execute();
        $table = $statement->fetch();
        $statement->closeCursor();

        return $table;
    }

}
