<?php

//$name = filter_input(INPUT_GET, 'custName');
//$phone = filter_input(INPUT_GET, 'phoneNumber');
//$party = filter_input(INPUT_GET, 'partySize');
//$date = filter_input(INPUT_GET, 'resDate');
//$time = filter_input(INPUT_GET, 'resTime');

if ($phone === NULL || $phone === "") {
    $errorMessage = 'Please enter a Phone Number';
    include('Views/manageReservations.php');
    return;
} else if ($party === NULL || $party === "") {
    $errorMessage = 'Please enter a Party Size';
    include('Views/manageReservations.php');
    return;
} else if ($date === NULL || $date === "") {
    $errorMessage = 'Please enter a Date for the Reservation';
    include('Views/manageReservations.php');
    return;
} else if ($time === NULL || $time === "") {
    $errorMessage = 'Please enter a Time for a Reservation';
    include('Views/manageReservations.php');
    return;
} else {
    $errorMessage = '';
    DB::updateReservation($name, $phone, $party, $date, $time);

    $message = 'Reservation successfully updated';
    include('Views/resCleared.php');
    return;
}
?>

