<?php include('Views/header.php');?>


<!--simple page used to ensure reservation is set -->
<form action='index.php' method='post'>
<section id="confirmation">
<h1>Thank you <?php echo(htmlspecialchars($newRes->getCustomerName()));?>!</h1>

<h2>Your reservation at Store #<?php echo(htmlspecialchars($newRes->getStoreNum()));?><br>
    has been successfully set for <?php echo(htmlspecialchars($newRes->getPartySize()))?> people
    at <?php echo(htmlspecialchars($newRes->getResTime()));?>.<br><br>

    Contact Info: <?php echo(htmlspecialchars($newRes->getCustomerPhone()));?></h2>
<input type="hidden" name="action" value="home">
<input type='submit' value="Home">
</section>
</form>
<?php include('Views/footer.php');?>