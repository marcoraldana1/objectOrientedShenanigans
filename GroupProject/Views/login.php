<?php include('header.php'); ?>


<section id='login'>
    <form action="../index.php" method="post">
        <label>Store Number: </label>
        <input type="text" name="store_number">
        
        <input type="hidden" name="action" value="login">
        <input type="submit" value="Login">
    </form>
</section>


<?php include('footer.php');



