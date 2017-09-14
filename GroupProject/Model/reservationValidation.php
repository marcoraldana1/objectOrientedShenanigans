<?php

        $cust_name = filter_input(INPUT_GET,'cust_name');
        $phone = filter_input (INPUT_GET, 'phone_number');
        $partySize = filter_input(INPUT_GET, 'party_size');
        $res_store_number = filter_input(INPUT_GET, 'store_number');
        $date = filter_input(INPUT_GET, 'res_date');
        $time = filter_input(INPUT_GET, 'res_time');
        
        if($cust_name === NULL || $cust_name === "") {
            $errorMessage = 'Customer Name Required';
            include('Views/reservations.php');
            return;
            
        } else if($phone === NULL || $phone === "") {
            $errorMessage = "Phone Required";
            include('Views/reservations.php');
            return;
            
        } else if($partySize === NULL || $partySize === "") {
            $errorMessage = "Please enter size of Party";
            include('Views/reservations.php');
            return;
        } else if($date === NULL || $date === "" ) {
            $errorMessage = "Please enter a date for the reservation";
            include('Views/reservations.php');
            return;
        } else if($time === NULL || $time === "" ) {
            $errorMessage = "Please enter a time for the reservation";
            include('Views/reservations.php');
            return;
        }else if($res_store_number === NULL || $res_store_number === "") {
            $errorMessage = "Please enter a Store Number";
            include('Views/reservations.php');
            return; 
        }
        else {
            $errorMessage = '';
            $newRes = new Reservation($date, $time, $res_store_number, $cust_name, $partySize, $phone);
            DB::addReservation($newRes);
            include('Views/res_confirmation.php');
            return;
        }
        
        
        
        
?>