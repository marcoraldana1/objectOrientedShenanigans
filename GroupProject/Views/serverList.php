<?php include('Views/header.php') ?>



<main>
       <article class="servers">
        <h1>Assign Servers</h1>
        <hr>
        
        <table>

        <?php foreach ($allActiveServers as $server): ?>
            <tr>
                <td><?php echo $server->getServerFName() . " " . $server->getServerLName(); ?></td>
                    <td>
                        <form action="index.php" method="post">
                            <input type="hidden" name="action" value="assignServer">
                            <input type="hidden" name="index" value="<?php echo $server->getServerFName() . " " . $server->getServerLName(); ?>">
                            <input type="submit" name="assign" value="assign">
                        </form>
                    </td>   
            </tr>
            <?php endforeach; ?>
    
        </table>
    </article>
</main>

<?php include('Views/footer.php'); ?>
