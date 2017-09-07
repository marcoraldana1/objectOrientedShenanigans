<?php include('Views/header.php') ;  ?>


<section id='table'>
    <h1><?php echo $tableNum ?></h1>
    <form action='index.php' method='POST'>

        <label>Occupied </label>
        <input type='checkbox' name='occupied'>
        <br>

        <label>Server:  </label>
        <input type='text' name='Server' value="<?php echo $assignedServer ?>">
        <br>

    </form>
    
    <form action='index.php' method ='POST'>
        <input type='submit' value='Back to tables'>
        <input type='hidden' name='action' value='home'>
    </form>
</section>


<?php include('Views/footer.php') ?>
