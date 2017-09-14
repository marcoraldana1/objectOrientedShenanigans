<?php include('Views/header.php'); ?>


<section id='reservation'>
    <h1>Make a Reservation!</h1>
    <h5><?php echo(htmlspecialchars($errorMessage)) ?></h5>
    <form action='index.php' method='GET'>

        <label>Customer Name: </label>
        <input type='text' name='cust_name' value='<?php if(isset($cust_name)) {echo(htmlspecialchars($cust_name));}?>'>
        <br>

        <label>Phone Number: </label>
        <input type='text' name='phone_number' value='<?php if(isset($phone)) {echo(htmlspecialchars($phone));}?>'>
        <br>

        <label>Party Size: </label>
        <input type='text' name='party_size' value='<?php if(isset($partySize)) {echo(htmlspecialchars($partySize));}?>'>
        <br>

        <label>Date: </label>
        <input type='text' name='res_date' value='<?php if(isset($date)) {echo(htmlspecialchars($date));}?>'>
        <br>

        <label>Time of Reservation: </label>
        <input type='text' name='res_time' value='<?php if(isset($time)) {echo(htmlspecialchars($time));}?>'>
        <br>

        <label>Store Number: </label>
        <input type='text' name='store_number' <?php if(isset($res_store_number)) {echo(htmlspecialchars($res_store_number));}?>><br>

        <input type='hidden' name='action' value='res_confirmation'>
        <input type='submit'  id='submit'  value='Set Reservation'>



    </form>

    <form action='index.php' method ='POST'>
        <input type='submit' value='View Reservations'>
        <input type='hidden' name='action' value='viewReservations'>
    </form>
</section>


<?php include('Views/footer.php') ?>

