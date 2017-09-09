<?php include('Views/header.php'); ?>
<main>
   
        <section id='table'>
            <h1>Table #<?php echo $tableNum ?></h1>
            <form action='index.php' method='POST'>
                <h3><?php echo $tableSize ?> seat</h3>
                <label>Occupied </label>
                <input type='checkbox' name='occupied'>
                <br>
                <br>
                <label>Server:  </label>
                <input type='text' name='Server' value="<?php echo $assignedServer ?>">

                <form action='index.php' method ='POST'>
                    <input type='submit' value='Assign'>
                      <input type="hidden" name="assignedServer" value="<?php echo $assignedServer ?>">
                    <input type='hidden' name='action' value='assignServer'>
                </form>
            </form>
            <br>
        </section>
  
</main>

<?php include('Views/footer.php') ?>
