<?php

session_start();
require('Model/Reservation.php');

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
        $store_number = filter_input(INPUT_POST, 'store_number');
        include('Views/home.php');
        break;
    case 'reservation':
        include('Views/reservations.php');
        break;
    case 'res_confirmation':
        $resID = 1; //this should be auto incrementing. For another time though
        $first_name = filter_input(INPUT_POST,'first_name');
        $last_name = filter_input (INPUT_POST, 'last_name');
        $res_store_number = filter_input(INPUT_POST, 'store_number');
        $date = filter_input(INPUT_POST, 'res_date');
        $time = filter_input(INPUT_POST, 'res_time');
        
        //gets all information from user and creates object
        //needs validation
        $newRes = new Reservation($resID, $date, $time, $res_store_number, $first_name, $last_name);
             
        include('Views/res_confirmation.php');
        break;
        
        $allActiveServers = array(array('Billy','Bob','6-cl'),array('Heather','Johnson','11-5'),array('Mark','Rathjen','5-9'),array('Jenn', 'Larson','11-5'));
         $currentWaitlist = array(array('Bob','6-top','5:03pm'),array('Johnson','2-top','5:05pm'),array('Rathjen','8-top','5:10pm'),array('Leonard','4-top','513pm'));
        include('Views/home.php');
        break;
    case 'update':
         $store_number = $_SESSION['store_number'];
        
        include ('Views/login.php');
        break;
    case 'admin_attempt':
        
        break;
}
?>

