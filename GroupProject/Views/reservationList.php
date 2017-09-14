<?php include('Views/header.php');?>

<section id="reservationList">

    <table>
        <tr>
            <th>Customer Name</th>
            <th>Customer Phone</th>
            <th>Party Size</th>
            <th>Date</th>
            <th>Time</th>
            <th>Select</th>
        </tr>
        
        <?php foreach($reservations as $index=>$res) { ?>
            <tr>
                <td> <?php echo $res['custName']; ?></td>
                <td> <?php echo $res['custPhone']; ?></td>
                <td> <?php echo $res['partySize']; ?></td>
                <td> <?php echo $res['resDate']; ?></td>
                <td> <?php echo $res['resTime']; ?></td>
                <td>
                    <form action='index.php' method='POST'>
                        <input type='hidden' name='customer' value='<?php echo $res['custName']; ?>'>
                        <input type='hidden' name='phone' value='<?php echo $res['custPhone']; ?>'>
                        <input type='hidden' name='party' value='<?php echo $res['partySize']; ?>'>
                        <input type='hidden' name='date' value='<?php echo $res['resDate']; ?>'>
                        <input type='hidden' name='time' value='<?php echo $res['resTime']; ?>'>
                        <input type='submit' value='Select Reservation'>
                        <input type='hidden' name='action' value='selectReservation'>
                    </form>
                </td>
                <td>
                    <form action='index.php' method='POST'> 
                    <input type='submit' value='Check In'>
                    <input type='hidden' name='action' value='checkIn'>
                    <input type='hidden' name='index' value='<?php echo $index; ?>'>
                    </form>
                </td>
            </tr>

        <?php
        } ?>
    </table>

</section>

<?php include('Views/footer.php');?>

