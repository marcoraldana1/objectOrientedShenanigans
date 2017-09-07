<?php include('Views/header.php') ?>



<main>
       <article class="servers">
        <h1>Manage Servers</h1>
        <hr>
        
        <table>

        <?php foreach ($allActiveServers as $server): ?>
            <tr>
                <td><?php echo $server->getServerFName() . " " . $server->getServerLName(); ?></td>
                <?php if ($user->getUserRole() == "Manager") { ?>
                    <td>
                        <form action="index.php" method="post">
                            <input type="hidden" name="action" value="deleteServer">
                            <input type="hidden" name="index" value="<?php echo $server->getServerID() ?>">
                            <input type="submit" name="delete" value="Delete">
                        </form>
                    </td>
                <?php } ?>      

            </tr>
            <?php endforeach; ?>
    
        </table>
        <?php if ($user->getUserRole() == "Manager") { ?>
        <div class="input_form">
            <form action="index.php" method="post">
                <fieldset>
                    <legend>Add Server:</legend>
                    <label for="serverID">Server ID:</label><input type="text" name="serverID" value=""><br>
                    <label for="FName">First Name:</label><input type="text" name="FName" value=""><br>
                    <label for="LName">Last Name:</label><input type="text" name="LName" value=""><br>
                    <input type="hidden" name="action" value="addServer">
                    <input type="submit" name="add" value="Add">
                </fieldset>
            </form>
        </div>
        <?php } ?>
    </article>
</main>

<?php include('Views/footer.php'); ?>