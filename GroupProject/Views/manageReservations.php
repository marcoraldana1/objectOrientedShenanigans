<?php include('Views/header.php'); ?>

<section id='reservation'>
    <h1>Edit Reservation!</h1>
    <h5><?php echo(htmlspecialchars($errorMessage));?></h5>
    
    <form action='index.php' method='GET'>

        <label>Customer Name: </label>
        <input type='text' name='custName' readonly='readonly' value='<?php if(isset($name)) {echo(htmlspecialchars($name));} ?>'>
        <br>

        <label>Phone Number: </label>
        <input type='text' name='phoneNumber' value='<?php if(isset($phone)) {echo(htmlspecialchars($phone));} ?>'>
        <br>

        <label>Party Size: </label>
        <input type='text' name='partySize' value='<?php if(isset($party)) {echo(htmlspecialchars($party));} ?>'>
        <br>

        <label>Date: </label>
        <input type='text' name='resDate' value='<?php if(isset($date)) {echo(htmlspecialchars($date));}  ?>'>
        <br>

        <label>Time of Reservation: </label>
        <input type='text' name='resTime' value='<?php if(isset($time)) {echo(htmlspecialchars($time));} ?>'>
        <br>
        <br>
          <input type='submit' value='Update Reservation'>
        <input type='hidden' name='action' value='updateReservation'>

    </form>

    <br><br>
    <form action='index.php' method='POST'>
        <input type='hidden' name='custName' value='<?php echo(htmlspecialchars($name));?>'>
        <input type='hidden' name='action' value='clearedReservation'>
        <input type='submit'  id='submit'  value='Clear Reservation'>
    </form>
</section>


<?php include('Views/footer.php'); ?>
