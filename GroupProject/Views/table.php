<?php include('Views/header.php'); ?>
<main>

    <section id='tables'>
        <h1>Table #<?php echo htmlspecialchars($tableID); ?></h1>


        <form action='index.php' method='POST'>
            <h3><?php echo $tableSize ?> seat</h3>
            <label>Occupied </label>
            <input type='checkbox' name='occupied'>
            <br>
            <br>
            <div id="serverSelect">
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
        </form>
        <br>
    </section>

</main>

<?php include('Views/footer.php') ?>
