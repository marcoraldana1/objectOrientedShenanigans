<?php include('Views/header.php'); ?>
<main>

    <section id='tables'>
        <h1>Table #<?php echo htmlspecialchars($tableID); ?></h1>



        <div id="serverSelect">
            <form action='index.php' method ='POST'>
                <input type='hidden' name='action' value='checkSeat'>

        <h3><?php echo $tableSize ?> seat</h3>
                <div class="occupied">
                    <label>Occupied</label>
                    <input type='checkbox' name='occupied'>
                    <input type="submit" value="SET">

                </div>
            </form>
            <br>
            <form action='index.php' method ='POST'>
                <input type='hidden' name='action' value='assignServer'>
                <table>

                    <tr>
                        <td>Server: </td>
                        <td><input type='text' name='Server' value="<?php echo htmlspecialchars($assignedServer); ?>"></td>
                        <td> <input type="hidden" name="assignedServer" value="<?php echo htmlspecialchars($assignedServer); ?>"></td>
                        <td><input type='submit' value=UPDATE></td>
                    </tr>

                </table>

            </form>
        </div>

        <br>
    </section>

</main>

<?php include('Views/footer.php') ?>
