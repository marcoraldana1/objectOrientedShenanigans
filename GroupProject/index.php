<?php

session_start();

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
        $_SESSION['store_number']= $store_number;
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
