<?php

//

session_start();

require('Model/database.php');
require('Model/db.php');
require('Model/Customer.php');
require('Model/Reservation.php');
require('Model/Store.php');
require('Model/Table.php');
require('Model/User.php');
require('Model/Waitlist.php');
require('Model/Server.php');


//gets initial page action to direct to main login
if (!isset($store_number)) {
    $store_number = '';
}

if (isset($_SESSION['user'])) {
    //pull user out of session.  this is a User object
    $user = unserialize($_SESSION['user']);
    $store_number = $user->getStoreNum();
} elseif (!isset($user)) {
    $user = null;
}
if (!isset($password)) {
    $password = '';
}

if (isset($_SESSION['waitList'])) {
    //get Waitlist object out of session
    $waitList = unserialize($_SESSION['waitList']);
} else {
    $waitList = new Waitlist();
}


$action = filter_input(INPUT_POST, 'action');

//logic to navigate to initial login
if ($action === NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action === NULL) {
        $action = 'initial_login';
    }
}

$_SESSION['store_number'] = $store_number;

$allActiveServers = DB::getServersByStore($store_number);

switch ($action) {
    case 'initial_login':

        include('Views/login.php');
        break;
    case 'home':
        $wait = new Waitlist();
        //this information needs to be pulled from the database. We probably need a validation model
        //$store_number = filter_input(INPUT_POST, 'store_number');
        $store_number = $_SESSION['store_number'];

        $allActiveServers = DB::getServersByStore($store_number);
        $currentWaitlist = $wait->getWaitlist();
        // $allActiveServers = array(array('Billy','Bob','6-cl'),array('Heather','Johnson','11-5'),array('Mark','Rathjen','5-9'),array('Jenn', 'Larson','11-5'));
        // $allActiveServers = getServersByStore($store_number);
        // $currentWaitlist = array(array('Bob','6-top','5:03pm'),array('Johnson','2-top','5:05pm'),array('Rathjen','8-top','5:10pm'),array('Leonard','4-top','513pm'));
        $tableColors = setTableColors();
        include('Views/home.php');
        break;

    case 'servers':
        $allActiveServers = DB::getServersByStore($store_number);
        include('Views/serverList.php');

        break;
    case 'manageServers':
        $allActiveServers = DB::getServersByStore($store_number);
        include('Views/manageServers.php');
        break;
    case 'tableAssign':
        $storeNum = $_SESSION['store_number'];
        $tableId = filter_input(INPUT_POST, 'tableNum');
        $seatingCapacity = filter_input(INPUT_POST, 'seatingCapacity');
        $isOccupied = filter_input(INPUT_POST, 'isOccupied');
        $serverId = filter_input(INPUT_POST, 'serverId');
        $serverFName = filter_input(INPUT_POST, 'serverFName');
        $serverLName = filter_input(INPUT_POST, 'serverLName');
        $server = new Server($serverId, $storeNum, $serverFName, $serverLName);

        $serverID = $serverId;

        $serverFName = $server->getServerFName();
        $serverLName = $server->getServerLName();


        $tableID = filter_input(INPUT_POST, 'tableNum');
        $tableSize = filter_input(INPUT_POST, 'tableSize');

        $assignServer = DB::getTableServerByStore($tableID, $storeNum);

        $serverID = $assignServer["serverID"];

        $table = new Table($tableId, $seatingCapacity, $serverID, $isOccupied);
        $table->setServerID($serverID);

        $assignedServer = DB::findServerByID($serverID);

        $assignedServer = array_shift($assignedServer);


        if ($assignedServer == null) {
            $assignedServer = 'NONE';
        } else {
            $assignedServer = $assignedServer["serverFName"] . '  ' . $assignedServer["serverLName"];
        }


        $_SESSION['storeNum'] = $storeNum;
        $_SESSION['tableID'] = $tableID;
        $_SESSION['tableSize'] = $tableSize;
        $_SESSION['assignedServer'] = $assignedServer;

        include('Views/table.php');
        break;
    case 'table':
        $storeNum = $_SESSION['store_number'];
        $tableId = filter_input(INPUT_POST, 'tableNum');
        $seatingCapacity = filter_input(INPUT_POST, 'seatingCapacity');
        $isOccupied = filter_input(INPUT_POST, 'isOccupied');
        $serverId = filter_input(INPUT_POST, 'serverId');
        $tableSize = $_SESSION['tableSize'];



        $serverFName = filter_input(INPUT_POST, 'serverFName');
        $serverLName = filter_input(INPUT_POST, 'serverLName');
        $server = new Server($serverId, $storeNum, $serverFName, $serverLName);

        $serverID = $server->getServerId();

        $tableID = $_SESSION['tableID'];

        //$tableSize = filter_input(INPUT_POST, 'tableSize');

        $assignServer = DB::getTableServerByStore($tableID, $storeNum);
        $table = new Table($tableId, $seatingCapacity, $serverID, $isOccupied);
        $table->setServerID($serverID);

        $assignedServer = DB::findServerByID($serverID);
        $assignedServer = array_shift($assignedServer);

        if ($assignedServer == null) {
            $assignedServer = 'NONE';
        } else {
            DB::setTableServerByID($serverID, $tableID, $storeNum);
            $assignedServer = $assignedServer['serverFName'] . '  ' . $assignedServer['serverLName'];
        }


        $_SESSION['storeNum'] = $storeNum;
        $_SESSION['tableID'] = $tableID;
        $_SESSION['tableSize'] = $tableSize;
        $_SESSION['assignedServer'] = $assignedServer;


        include('Views/table.php');
        break;
    case 'checkSeat':
         $tableID = $_SESSION['tableID'];
         $storeNum = filter_input(INPUT_POST, 'storeNum');
         $tableSize = $_SESSION['tableSize'];
         $assignedServer = $_SESSION['assignedServer'];
         $occupied = filter_input(INPUT_POST, 'occupied');
        
         if(!isset($_POST['occupied'])){
             $isOccupied = 0;
         }
         else {
             $isOccupied = 1;
         }
            
         
        DB::setIsOccupiedOnTable($tableID, $storeNum, $isOccupied);

        $_SESSION['assignedServer'] = $assignedServer;
        $_SESSION['tableID'] = $tableID;
        $_SESSION['tableSize']= $tableSize;
        $_SESSION['isOccupied'] = $isOccupied;
        $_SESSION['occupied']= $occupied;
        
         include('Views/table.php');
        break;
    case 'assignServer':
       
        $assignedServer = $_SESSION['assignedServer'];
        $tableId = filter_input(INPUT_POST, 'tableNum');
        $seatingCapacity = filter_input(INPUT_POST, 'seatingCapacity');
        $serverID = filter_input(INPUT_POST, 'serverId');
        $storeNum = filter_input(INPUT_POST, 'storeNum');
        $isOccupied = filter_input(INPUT_POST, 'isOccupied');

        $table = new Table($tableId, $seatingCapacity, $serverID, $isOccupied);

        $serverFName = filter_input(INPUT_POST, 'serverFName');
        $serverLName = filter_input(INPUT_POST, 'serverLName');
        $tableID = $_SESSION['tableID'];

        $tableSize = $_SESSION['tableSize'];
        $tableSize = $table->setSeatingCapacity($tableSize);

       
        $storeNum = $_SESSION['storeNum'];
        $servers = DB::getServersByStore($store_number);
        $serverId = filter_input(INPUT_POST, 'serverId');

        $serverFName = filter_input(INPUT_POST, 'serverFName');
        $serverLName = filter_input(INPUT_POST, 'serverLName');

        $server = new Server($serverId, $storeNum, $serverFName, $serverLName);
        // $server = new Server($servers["serverId"], $servers["storeNum"], $servers["serverFName"], $servers["serverLName"]);
        //$assignedServer = $server->serverFName." ".$server->serverLName;
        $_SESSION['server'] = $server;
        $_SESSION['assignedServer'] = $assignedServer;
        $_SESSION['tableID'] = $tableID;
        $_SESSION['tableSize']=$tableSize;
        $_SESSION['isOccupied'] = $isOccupied;
        include('Views/serverList.php');
        break;
    
case 'removeServer':
        $assignedServer = $_SESSION['assignedServer'];
        $tableId = filter_input(INPUT_POST, 'tableNum');
        $seatingCapacity = filter_input(INPUT_POST, 'seatingCapacity');
        $serverID = filter_input(INPUT_POST, 'serverId');
        $storeNum = filter_input(INPUT_POST, 'storeNum');
        $isOccupied = filter_input(INPUT_POST, 'isOccupied');
        $tableSize = filter_input(INPUT_POST, 'tableSize');
        
        $table = new Table($tableId, $seatingCapacity, $serverID, $isOccupied);
        $table->setServerID(NULL);
        $tableID = $_SESSION['tableID'];

        //$tableSize = $_SESSION['tableSize'];
        //$tableSize = $table->setSeatingCapacity($tableSize);

        $assignedServer = 'NONE';        
           
        $_SESSION['storeNum'] = $storeNum;
        $_SESSION['tableID'] = $tableID;
        $_SESSION['tableSize'] = $tableSize;
        $_SESSION['assignedServer'] = $assignedServer;

        include('Views/table.php');
        break;
    
    case 'reservation':
        $errorMessage = '';
        include('Views/reservations.php');
        break;
    case 'res_confirmation':
        //gets all information from user and creates object
        //needs validation
//        $cust_name = filter_input(INPUT_POST, 'cust_name');
//        $phone = filter_input(INPUT_POST, 'phone_number');
//        $partySize = filter_input(INPUT_POST, 'party_size');
//        $res_store_number = filter_input(INPUT_POST, 'store_number');
//        $date = filter_input(INPUT_POST, 'res_date');
//        $time = filter_input(INPUT_POST, 'res_time');
        include('Model/reservationValidation.php');


//        $newRes = new Reservation($date, $time, $res_store_number, $cust_name, $partySize, $phone);
//        DB::addReservation($newRes);




        break;

    case 'viewReservations':

        $store_number = $_SESSION['store_number'];

        $reservations = DB::getReservationsByStore($store_number);
        $allReservations = array();

        //this takes the items from the array and assigns them to objects
        foreach ($reservations as $res) {
            $tempReservation = new Reservation($res['resDate'], $res['resTime'], $res['storeNum'], $res['custName'], $res['partySize'], $res['custPhone']);

            array_push($allReservations, $tempReservation);
        }

        include('Views/reservationList.php');
        break;

    case 'selectReservation':
        $errorMessage = '';
        $name = filter_input(INPUT_POST, 'customer');
        $phone = filter_input(INPUT_POST, 'phone');
        $party = filter_input(INPUT_POST, 'party');
        $date = filter_input(INPUT_POST, 'date');

        $time = filter_input(INPUT_POST, 'time');
        include('Views/manageReservations.php');
        break;

    case 'clearedReservation':
        $selectedName = filter_input(INPUT_POST, 'custName');

        DB::deleteReservation($selectedName);

        $message = 'Item successfully deleted';
        include('Views/resCleared.php');
        break;

    case 'updateReservation':
        $errorMessage = '';
        $name = filter_input(INPUT_GET, 'custName');
        $phone = filter_input(INPUT_GET, 'phoneNumber');
        $party = filter_input(INPUT_GET, 'partySize');
        $date = filter_input(INPUT_GET, 'resDate');
        $time = filter_input(INPUT_GET, 'resTime');


//        DB::updateReservation($name, $phone, $party, $date, $time);
//
//        $message = 'Reservation successfully updated';
//        include('Views/resCleared.php');
        include('Model/editResValidation.php');
        break;

    case 'update':
        $store_number = $_SESSION['store_number'];
        $_SESSION['store_number'] = $store_number;

        include ('Views/login.php');
        break;
    case 'deleteWait':
        $index = filter_input(INPUT_POST, 'index');

        $waitList->removeWaitByIndex($index);
        $_SESSION['waitList'] = serialize($waitList);
        include('Views/home.php');
        break;
    case 'addWait':
        include ('Views/addWaitlist.php');
        break;
    case 'wait_confirm':
        $name = filter_input(INPUT_POST, 'cust_name');
        $size = filter_input(INPUT_POST, 'party_size');
        $phone = filter_input(INPUT_POST, 'phone_number');
        $cust = new Customer($name, $size, $phone);
        $waitList->add($cust);

        $_SESSION['waitList'] = serialize($waitList);

        include('Views/home.php');
        break;
    case 'admin_attempt':
        $wait = new Waitlist();

        $login = filter_input(INPUT_POST, 'user');
        $password = filter_input(INPUT_POST, 'password');
        if (DB::userNameExists($login) > 0) {

            $user = DB::getUserByUserLogin($login);
            $signin = new User($user["userID"], $user["userRole"], $user["userName"], $user["userLogin"], $user["userPassword"], $user["storeNum"]);
        } else {
            $message = 'BAD USERNAME TRY AGAIN';
            include('Views/login.php');
            break;
        }

        if ($signin->getUserPassword() != $password) {
            $message = 'BAD PASSWORD LOGIN, TRY AGAIN';
            include('Views/login.php');
            break;
        }
        //store user in session
        //was not storing store number in session initially. Hard coded the value. 
        //User is not used as an object here so cannot use getStoreNum()
        $storeNum = $signin->getStoreNum();
        $allActiveServers = DB::getServersByStore($storeNum);
        $currentWaitlist = $wait->getWaitlist();

        $user = $signin;
        $_SESSION['user'] = serialize($user);
        $_SESSION['storeNum'] = $signin->getStoreNum();
        $tableColors = setTableColors();
        include ('Views/home.php');
        break;
    case 'deleteServer':
        if ($user->getUserRole() == "Manager") {
            //only manager has access to do this
            $index = filter_input(INPUT_POST, 'index');
            DB::deleteServerByID($index);
        }
        //ideally, I would put an else to send to an access denied page
        $allActiveServers = DB::getServersByStore($storeNum);
        include('Views/manageServers.php');
        break;
    case 'addServer':
        if ($user->getUserRole() == "Manager") {
            //only manager has access to do this
            $serverID = filter_input(INPUT_POST, 'serverID');
            $storeNum = $user->getStoreNum();
            $serverFName = filter_input(INPUT_POST, 'FName');
            $serverLName = filter_input(INPUT_POST, 'LName');
            $server = new Server($serverID, $storeNum, $serverFName, $serverLName);

            DB::addServer($server);
        }
        //ideally, I would put an else to send to an access denied page
        $allActiveServers = DB::getServersByStore($store_number);
        include('Views/manageServers.php');
        break;
    case 'checkIn':
        //reservation check in
        $reservations = DB::getReservationsByStore($store_number);
        
        $index = filter_input(INPUT_POST, 'index');
        
        $res = $reservations[$index];
        $newCust = new Customer($res['custName'], $res['partySize'], $res['custPhone']);
        $waitList->add($newCust, true);
        unset($reservations[$index]);
        DB::deleteReservation($newCust->getCustomerName());
        
        $_SESSION['waitList'] = serialize($waitList);
        
        $tableColors = setTableColors();
        include('Views/home.php');
        break;
    case 'Logout':
        unset($_SESSION['user']);
        header('Location: .', true);
        exit;
        break;
}

function setTableColors() {
    $tableColors = '';
    $tables = db::getTotalTablesForRestaurant($_SESSION['storeNum']);
    $totalTables[0] = $tables[0];
    $totalTables[1] = $tables[1];
    $totalTables[2] = $tables[2];
    $totalTables[3] = $tables[3];
    $totalTables = array_sum($totalTables);
    $tableNum = 1;

    while ($tableNum <= $totalTables) {
        if (db::checkIfTableSat($tableNum, $_SESSION['storeNum'])) {
            $tableColors .= '.table' . $tableNum . '_' . $_SESSION['storeNum'] . " { background-color: #f44336; color: white; } " . "\n ";
        } else if (db::checkIfTableAssigned($tableNum, $_SESSION['storeNum'])) {
            $tableColors .= '.table' . $tableNum . '_' . $_SESSION['storeNum'] . " { background-color: #4CAF50; color: white; } " . "\n ";
        }
        $tableNum++;
    }
    return $tableColors;
}

//put user and waitlist back into session
?>



