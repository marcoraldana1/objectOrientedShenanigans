<?php

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
    case 'assignServer':
        $assignedServer = $server->serverFName." ".$server->serverLName;
        include('Views/table.php');
        break; 
    case 'reservation':
        include('Views/reservations.php');
        break;
    case 'res_confirmation':
        //gets all information from user and creates object
        //needs validation
        $cust_name = filter_input(INPUT_POST, 'cust_name');
        $phone = filter_input(INPUT_POST, 'phone_number');
        $partySize = filter_input(INPUT_POST, 'party_size');
        $res_store_number = filter_input(INPUT_POST, 'store_number');
        $date = filter_input(INPUT_POST, 'res_date');
        $time = filter_input(INPUT_POST, 'res_time');


        $newRes = new Reservation($date, $time, $res_store_number, $cust_name, $partySize, $phone);
        DB::addReservation($newRes);



        include('Views/res_confirmation.php');
        break;
    
    case 'viewReservations':
        
        $store_number = $_SESSION['store_number'];
        
        $reservations = DB::getReservationsByStore($store_number);
        
        include('Views/reservationList.php');
        break;


    case 'update':
         $store_number = $_SESSION['store_number'];
        $_SESSION['store_number']= $store_number;
        
        include ('Views/login.php');
        break;
    case 'addWait':
        
         include ('Views/addWaitlist.php');
        break;
    case 'admin_attempt':
        $wait = new Waitlist();

        $login = filter_input(INPUT_POST, 'user');
        $password = filter_input(INPUT_POST, 'password');
        if (DB::userNameExists($login) > 0) {

            $user = DB::getUserByUserLogin($login);
            $signin = new User($user["userID"], $user["userRole"], $user["userName"], $user["userLogin"], $user["userPassword"], $user["storeNum"]);
        } else {
            $message = 'NO SUCH USERNAME TRY AGAIN';
            include('Views/login.php');
            break;
        }

        if ($signin->getUserPassword() != $password) {
            $message = 'BAD LOGIN TRY AGAIN';
            include('Views/login.php');
            break;
        }
        //store user in session
        //was not storing store number in session initially. Hard coded the value. 
        //User is not used as an object here so cannot use getStoreNum()
        
        $_SESSION['store_number'] = $store_number;
         
        $allActiveServers = DB::getServersByStore($store_number);
        $currentWaitlist = $wait->getWaitlist();
        
           $user = $signin;
        $_SESSION['user'] = serialize($user);
        $_SESSION['store_number'] = $signin->getStoreNum();
        include ('Views/home.php');
        break;
    case 'deleteServer':
        if ($user->getUserRole() == "Manager") {
            //only manager has access to do this
            $index = filter_input(INPUT_POST, 'index');
            DB::deleteServerByID($index);
        }
        //ideally, I would put an else to send to an access denied page
        $allActiveServers = DB::getServersByStore($store_number);
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
    case 'Logout':
        unset($_SESSION['user']);
        header('Location: .', true);
        exit;
        break;
}
//put user and waitlist back into session
?>



