<?php include('Views/header.php') ;  ?>


<section id='reservation'>
    <h1>Make a Reservation!</h1>
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

        <label>Date: </label>
        <input type='text' name='res_date'>
        <br>

        <label>Time of Reservation: </label>
        <input type='text' name='res_time'>
        <br>

        <label>Store Number: </label>
        <input type='text' name='store_number'><br>

        <input type='hidden' name='action' value='res_confirmation'>
        <input type='submit'  id='submit'  value='Set Reservation'>
        


    </form>
    
    <form action='index.php' method ='POST'>
        <input type='submit' value='View Reservations'>
        <input type='hidden' name='action' value='viewReservations'>
    </form>
</section>


<?php include('Views/footer.php') ?>

