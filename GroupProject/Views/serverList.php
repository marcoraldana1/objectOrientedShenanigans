<?php include('Views/header.php') ?>



<main>
       <section class="servers">
        <h1>Assign Server</h1>
        <hr>
    
        <table>

        <?php foreach ($allActiveServers as $server): ?>
            <tr>
                <td><?php echo $server->getServerFName() . " " . $server->getServerLName(); ?></td>
                    <td>
                        <form action="index.php" method="post">
                            <input type="hidden" name="action" value="table">
                            <input type="hidden" name="serverFName" value="<?php echo $server->getServerFName(); ?>">
                            <input type="hidden" name="serverLName" value="<?php echo $server->getServerLName(); ?>">
                            <input type="submit" name="assign" value="assign">
                        </form>
                    </td>   
            </tr>
            <?php endforeach; ?>
    
        </table>
       
    </section>
</main>

<?php include('Views/footer.php'); ?>
