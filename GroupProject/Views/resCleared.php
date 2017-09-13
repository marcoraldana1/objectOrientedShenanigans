<?php include('Views/header.php');?>

<section id='confirmation'>
<h1><?php echo(htmlspecialchars($message));?></h1>

<form method='post' action="index.php">
    <input type="submit" value="home">
    <input type="hidden" name="action" value='home'>
</form>

</section>
<?php include('Views/footer.php');?>

