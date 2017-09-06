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
            echo "<tr><td>".($res['custName'])."</td>"
                    . "<td>".($res['custPhone'])."</td>"
                    ."<td>".($res['partySize'])."</td>"
                    ."<td>".($res['resDate'])."</td>"
                    ."<td>".($res['resTime'])."</td>"
                    ."<td><input type=submit value='Select Reservation'></td>";
        } ?>
    </table>
    </form>
</section>

<?php include('Views/footer.php');?>

