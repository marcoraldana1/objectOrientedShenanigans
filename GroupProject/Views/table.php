<?php include('Views/header.php') ;  ?>


<section id='table'>
    <h1>Table #<?php echo $tableNum ?></h1>
    <form action='index.php' method='POST'>

        <label>Occupied </label>
        <input type='checkbox' name='occupied'>
        <br>

        <label>Server:  </label>
        <input type='text' name='Server' value="<?php echo $assignedServer ?>">
       
    <form action='index.php' method ='POST'>
        <input type='submit' value='Assign'>
        <input type='hidden' name='action' value='assignServer'>
    </form>
    </form>
     <br>

</section>


<?php include('Views/footer.php') ?>
