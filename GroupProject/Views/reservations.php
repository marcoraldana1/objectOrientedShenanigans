<?php include('Views/header.php') ?>
<h1>Make a Reservation!</h1>

<section id='reservation'>
<form action='index.php' method='POST'>

    <label>First Name: </label>
    <input type='text' name='first_name'>
    <br>

    <label>Last Name: </label>
    <input type='text' name='last_name'>
    <br>
    
    <label>Store Number: </label>
    <input type='text' name='store_number' value='<?php if (isset($store_number)) {echo(htmlspecialchars($store_number));} ?>'>
    <br>
    
    <label>Date:<label>
    <input type='date' name='res_date'>
    <br>
    
    <label>Time of Reservation</label>
    <input type='time' name='res_time'>
    <br><br>
    
    <input type='hidden' name='action' value='res_confirmation'>
    <input type='submit' value='Set Reservation'>



</form>
</section>


<?php include('Views/footer.php') ?>

