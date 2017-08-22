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


?>
