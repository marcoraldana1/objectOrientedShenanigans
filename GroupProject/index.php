<?php
session_start();

//gets initial page action to direct to main login
$action = filter_input(INPUT_POST, 'action');

//logic to navigate to initial login
if($action === NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if($action === NULL)  {
        $action = 'initial_login';
    }
}



switch ($action){
    case 'initial_login':
        include('Views/login.php');
        break;        
    case 'Login':
        $store_number = filter_input(INPUT_POST, 'store_number');
        include('Views/main_layout.php');
        break;
        
}


?>
