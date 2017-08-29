<?php include('Views/header.php') ?>



<main>
    <article>
        <h1>Server Listing</h1>
        <hr>
        <?php foreach ($allActiveServers as $server): ?>
                <p><?php echo $server[0] . " " . $server[1] . " " . $server[2]; ?></p>

            <?php endforeach; ?>
    
        </article>
    </main>
</body>

<?php include('Views/footer.php'); ?>
