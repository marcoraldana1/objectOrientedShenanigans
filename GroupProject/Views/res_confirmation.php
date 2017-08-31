<?php include('Views/header.php');?>


<!--simple page used to ensure reservation is set -->
<h1>Thank you <?php echo(htmlspecialchars($cust_name))?></h1><br>
<h3>for your reservation at Store #<?php echo(htmlspecialchars($res_store_number));?><br>
    set on <?php echo(htmlspecialchars($date));?><br>
    at <?php echo(htmlspecialchars($time));?>
for a party of <?php echo(htmlspecialchars($partySize))?></h3>


<?php include('Views/footer.php');?>