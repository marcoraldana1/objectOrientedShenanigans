<?php include('Views/header.php') ?>
<h1>Make a Reservation!</h1>

<section id='reservation'>
<form action='index.php' method='POST'>

    <label>Customer Name: </label>
    <input type='text' name='cust_name'>
    <br>

    <label>Phone Number: </label>
    <input type='text' name='phone_number'>
    <br>
    
    <label>Party Size: </label>
    <input type='text' name='party_size'>
    <br>
    
    <label>Date: <label>
    <input type='date' name='res_date'>
    <br>
    
    <label>Time of Reservation: </label>
    <input type='time' name='res_time'>
    <br>
    
    <label>Store Number: </label>
    <input type='text' name='store_number'><br>
    
    <input type='hidden' name='action' value='res_confirmation'>
    <input type='submit' value='Set Reservation'>



</form>
</section>


<?php include('Views/footer.php') ?>

