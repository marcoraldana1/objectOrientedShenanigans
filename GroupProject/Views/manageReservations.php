<?php include('Views/header.php');?>

<section id='reservation'>
    <h1>Edit Reservation!</h1>
    <form action='index.php' method='POST'>

        <label>Customer Name: </label>
        <input type='text' name='custName' readonly='readonly' value='<?php echo(htmlspecialchars($name))?>'>
        <br>

        <label>Phone Number: </label>
        <input type='text' name='phoneNumber' value='<?php echo(htmlspecialchars($phone))?>'>
        <br>

        <label>Party Size: </label>
        <input type='text' name='partySize' value='<?php echo(htmlspecialchars($party))?>'>
        <br>

        <label>Date: </label>
        <input type='text' name='resDate' value='<?php echo (htmlspecialchars($date));?>'>
        <br>

        <label>Time of Reservation: </label>
        <input type='text' name='resTime' value='<?php echo(htmlspecialchars($time))?>'>
        <br>
        <br>

        <input type='hidden' name='action' value='clearedReservation'>
        <input type='submit'  id='submit'  value='Clear Reservation'>
        
        <br><br>
        
        <input type='submit' value='Update Reservation'>
        <input type='hidden' name='action' value='updateReservation'>
        </section>


<?php include('Views/footer.php');?>
