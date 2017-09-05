<?php

        $cust_name = filter_input(INPUT_POST,'cust_name');
        $phone = filter_input (INPUT_POST, 'phone_number');
        $partySize = filter_input(INPUT_POST, 'party_size');
        $res_store_number = filter_input(INPUT_POST, 'store_number');
        $date = filter_input(INPUT_POST, 'res_date');
        $time = filter_input(INPUT_POST, 'res_time');
        
        
        
        
        
        if($cust_name === NULL || $cust_name === '') {
            $errors['custName'] = 'Customer Name must be present';
        }
        else {
            $errors = '';
            
        }
        
        
        
?>