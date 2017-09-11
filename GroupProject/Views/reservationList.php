<?php include('Views/header.php');?>

<section id="reservationList">
    <form action="index.php" method="POST">
    <table>
        <tr>
            <th>Customer Name</th>
            <th>Customer Phone</th>
            <th>Party Size</th>
            <th>Date</th>
            <th>Time</th>
            <th>Select</th>
        </tr>
        <?php foreach($reservations as $res) {
            echo "<tr>"
                    ."<td>".($res['custName'])."<input type='hidden' name='customer' value='".$res['custName']."'></td>"
                    . "<td>".($res['custPhone'])."<input type='hidden' name='phone' value='".$res['custPhone']."'></td>"
                    ."<td>".($res['partySize'])."<input type='hidden' name='party' value='".$res['partySize']."'></td>"
                    ."<td>".($res['resDate'])."<input type='hidden' name='date' value='".$res['resDate']."'></td>"
                    ."<td>".($res['resTime'])."<input type='hidden' name='time' value='".$res['resTime']."'></td>"
                    
                    ."<td><input type=submit value='Select Reservation'></td>"
                    . "<input type='hidden' name='action' value='selectReservation'><tr>";
        } ?>
    </table>
    </form>
</section>

<?php include('Views/footer.php');?>

