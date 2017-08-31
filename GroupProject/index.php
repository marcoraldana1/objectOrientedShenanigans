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


//gets initial page action to direct to main login
if (!isset($store_number)) {
    $store_number = '';
}

if (!isset($user)) {
    $user = '';
}
if (!isset($password)) {
    $password = '';
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
    case 'login':
        //this information needs to be pulled from the database. We probably need a validation model
        $store_number = filter_input(INPUT_POST, 'store_number');
        
        
           // $allActiveServers = array(array('Billy','Bob','6-cl'),array('Heather','Johnson','11-5'),array('Mark','Rathjen','5-9'),array('Jenn', 'Larson','11-5'));
      // $allActiveServers = getServersByStore($store_number);
       
       
           // $currentWaitlist = array(array('Bob','6-top','5:03pm'),array('Johnson','2-top','5:05pm'),array('Rathjen','8-top','5:10pm'),array('Leonard','4-top','513pm'));
        include('Views/home.php');
        break;
    case 'servers':
        include('Views/serverList.php');
        
        break;
    case 'reservation':
        include('Views/reservations.php');
        break;
    case 'res_confirmation':
        //$resID = 1; //this should be auto incrementing. For another time though
        $cust_name = filter_input(INPUT_POST,'cust_name');
        $phone = filter_input (INPUT_POST, 'phone_number');
        $partySize = filter_input(INPUT_POST, 'party_size');
        $res_store_number = filter_input(INPUT_POST, 'store_number');
        $date = filter_input(INPUT_POST, 'res_date');
        $time = filter_input(INPUT_POST, 'res_time');
        
        //gets all information from user and creates object
        //needs validation
        //$newRes = new Reservation($resID, $date, $time, $res_store_number, $cust_name, $partySize, $phone);
        setReservation($cust_name, $phone, $partySize, $date, $time, $res_store_number);
        
             
        include('Views/res_confirmation.php');
        break;
        
   
    case 'update':
         $store_number = $_SESSION['store_number'];
        
        include ('Views/login.php');
        break;
    case 'admin_attempt':
        //mostly working now, having issues with the DB not being able to prepare.
        $wait = new Waitlist();
       
        $user = filter_input(INPUT_POST, 'user');
        $password = filter_input(INPUT_POST, 'password');
        
        $manager = getUserByUserLogin($user);
        $_SESSION['LOGGED_IN']=$manager;
        
       // $allActiveServers = getServersByStore($store_number);
        if($manager->getUserPassword() != $password){
            $message = 'BAD LOGIN TRY AGAIN';
            include('Views/login.php');
            break;
        }
        $_SESSION['store_number']=$manager->getStoreNum();
        $store_number = $_SESSION['store_number'];
        $currentWaitlist= $wait->getWaitlist();
         //$allActiveServers = DB::
        include ('Views/home.php');
        break;
}
?>

