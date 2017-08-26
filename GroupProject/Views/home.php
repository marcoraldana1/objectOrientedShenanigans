<?php include('Views/header.php') ?>



<main>
    <aside class="right">
        <br>
        <form action="index.php"  method="post">
            <input type="submit" class="reserve" value="RESERVATIONS"> 
            <input type='hidden' name='action' value='reservation'>
        </form>



        <h2>Waitlist</h2>
        <hr>
        <div class="wait">
            <?php foreach ($currentWaitlist as $wait): ?>
                <p><?php echo $wait[0] . " " . $wait[1] . " " . $wait[2]; ?></p>

            <?php endforeach; ?>
        </div>
    </aside>

    <aside class="left">
        <br>
        <form action="index.php"  method="post">
            <input type="submit" class="serverList" value="SERVER LIST"> 
        </form>



        <h2>Active Servers</h2>
        <hr>
        <div class="servers">
            <?php foreach ($allActiveServers as $server): ?>
                <p><?php echo $server[0] . " " . $server[1] . " " . $server[2]; ?></p>

            <?php endforeach; ?>
        </div>
    </aside>
    <article>

        <h2>Store # <?php echo htmlspecialchars($store_number); ?></h2>

        <section>
<?php if ($store_number == 100) : ?>
            <div class="home100">

            <form action="index.php"  method="post">
                <input type="hidden" name="action" value="2 seat">

                <input type="button" class="table2a100" value="#1--2 seat"> 

            </form>
            <form action="index.php"  method="post">
                <input type="hidden" name="action" value="2 seat">

                <input type="button" class="table2b100" value="#2--2 seat"> 

            </form>
            <form action="index.php"  method="post">
                <input type="hidden" name="action" value="2 seat">

                <input type="button" class="table2c100" value="#3--2 seat"> 

            </form>
            <form action="index.php"  method="post">
                <input type="hidden" name="action" value="2 seat">

                <input type="button" class="table2d100" value="#4--2 seat"> 

            </form>




            <form action="index.php"  method="post">
                <input type="hidden" name="action" value="8 seat">

                <input type="button" class="table8a100" value="#19--8 seat"> 

            </form>  <form action="index.php"  method="post">
                <input type="hidden" name="action" value="8 seat">

                <input type="button" class="table8b100" value="#23--8 seat"> 

            </form>

            <form action="index.php"  method="post">
                <input type="hidden" name="action" value="table7">

                <input type="button" class="table6a100" value="#15---6 seat"> 

            </form>
            <form action="index.php"  method="post">
                <input type="hidden" name="action" value="6 seat">

                <input type="button" class="table6b100" value="#16--6 seat"> 

            </form>
            <form action="index.php"  method="post">
                <input type="hidden" name="action" value="table5">

                <input type="button" class="table6c100" value="#17--6 seat"> 

            </form>
            <form action="index.php"  method="post">
                <input type="hidden" name="action" value="table6">

                <input type="button" class="table6d100" value="#18--6 seat"> 

            </form>

            <form action="index.php"  method="post">
                <input type="hidden" name="action" value="table8">

                <input type="button" class="table6e100" value="#19--6 seat"> 

            </form>
            <form action="index.php"  method="post">
                <input type="hidden" name="action" value="table8">

                <input type="button" class="table6f100" value="#21--6 seat"> 

            </form>

            <form action="index.php"  method="post">
                <input type="hidden" name="action" value="4 seat">

                <input type="button" class="table4a100" value="#6--4 seat"> 

            </form>
            <form action="index.php"  method="post">
                <input type="hidden" name="action" value="4 seat">

                <input type="button" class="table4b100" value="#7--4 seat"> 

            </form>
            <form action="index.php"  method="post">
                <input type="hidden" name="action" value="4 seat">

                <input type="button" class="table4c100" value="#8--4 seat"> 

            </form>
            <form action="index.php"  method="post">
                <input type="hidden" name="action" value="4 seat">

                <input type="button" class="table4d100" value="#9--4 seat"> 

            </form>
            <form action="index.php"  method="post">
                <input type="hidden" name="action" value="4 seat">

                <input type="button" class="table4e100" value="#10--4 seat"> 

            </form>
            <form action="index.php"  method="post">
                <input type="hidden" name="action" value="4 seat">

                <input type="button" class="table4f100" value="#11--4 seat"> 

            </form>
            <form action="index.php"  method="post">
                <input type="hidden" name="action" value="4 seat">

                <input type="button" class="table4g100" value="#12--4 seat"> 

            </form>
            <form action="index.php"  method="post">
                <input type="hidden" name="action" value="4 seat">

                <input type="button" class="table4h100" value="#13--4 seat"> 

            </form>
            <form action="index.php"  method="post">
                <input type="hidden" name="action" value="4 seat">

                <input type="button" class="table4i100" value="#14--4 seat"> 

            </form>
            <form action="index.php"  method="post">
                <input type="hidden" name="action" value="table21">

                <input type="button" class="table4j100" value="#20--4 seat"> 

            </form>

            </div>
 <?php else: ?>
                    <div class="home">

            <form action="index.php"  method="post">
                <input type="hidden" name="action" value="2 seat">

                <input type="button" class="table2a" value="#1--2 seat"> 

            </form>
            <form action="index.php"  method="post">
                <input type="hidden" name="action" value="2 seat">

                <input type="button" class="table2b" value="#2--2 seat"> 

            </form>
            <form action="index.php"  method="post">
                <input type="hidden" name="action" value="2 seat">

                <input type="button" class="table2c" value="#3--2 seat"> 

            </form>
            <form action="index.php"  method="post">
                <input type="hidden" name="action" value="2 seat">

                <input type="button" class="table2d" value="#4--2 seat"> 

            </form>




            <form action="index.php"  method="post">
                <input type="hidden" name="action" value="8 seat">

                <input type="button" class="table8a" value="#19--8 seat"> 

            </form>  <form action="index.php"  method="post">
                <input type="hidden" name="action" value="8 seat">

                <input type="button" class="table8b" value="#23--8 seat"> 

            </form>

            <form action="index.php"  method="post">
                <input type="hidden" name="action" value="table7">

                <input type="button" class="table6a" value="#15---6 seat"> 

            </form>
            <form action="index.php"  method="post">
                <input type="hidden" name="action" value="6 seat">

                <input type="button" class="table6b" value="#16--6 seat"> 

            </form>
            <form action="index.php"  method="post">
                <input type="hidden" name="action" value="table5">

                <input type="button" class="table6c" value="#17--6 seat"> 

            </form>
            <form action="index.php"  method="post">
                <input type="hidden" name="action" value="table6">

                <input type="button" class="table6d" value="#18--6 seat"> 

            </form>

            <form action="index.php"  method="post">
                <input type="hidden" name="action" value="table8">

                <input type="button" class="table6e" value="#19--6 seat"> 

            </form>
            <form action="index.php"  method="post">
                <input type="hidden" name="action" value="table8">

                <input type="button" class="table6f" value="#21--6 seat"> 

            </form>

            <form action="index.php"  method="post">
                <input type="hidden" name="action" value="4 seat">

                <input type="button" class="table4a" value="#6--4 seat"> 

            </form>
            <form action="index.php"  method="post">
                <input type="hidden" name="action" value="4 seat">

                <input type="button" class="table4b" value="#7--4 seat"> 

            </form>
            <form action="index.php"  method="post">
                <input type="hidden" name="action" value="4 seat">

                <input type="button" class="table4c" value="#8--4 seat"> 

            </form>
            <form action="index.php"  method="post">
                <input type="hidden" name="action" value="4 seat">

                <input type="button" class="table4d" value="#9--4 seat"> 

            </form>
            <form action="index.php"  method="post">
                <input type="hidden" name="action" value="4 seat">

                <input type="button" class="table4e" value="#10--4 seat"> 

            </form>
            <form action="index.php"  method="post">
                <input type="hidden" name="action" value="4 seat">

                <input type="button" class="table4f" value="#11--4 seat"> 

            </form>
            <form action="index.php"  method="post">
                <input type="hidden" name="action" value="4 seat">

                <input type="button" class="table4g" value="#12--4 seat"> 

            </form>
            <form action="index.php"  method="post">
                <input type="hidden" name="action" value="4 seat">

                <input type="button" class="table4h" value="#13--4 seat"> 

            </form>
            <form action="index.php"  method="post">
                <input type="hidden" name="action" value="4 seat">

                <input type="button" class="table4i" value="#14--4 seat"> 

            </form>
            <form action="index.php"  method="post">
                <input type="hidden" name="action" value="table21">

                <input type="button" class="table4j" value="#20--4 seat"> 

            </form>

            </div>
            <?php endif; ?>
        </section>

    </article>
</main>
</body>

<?php include('Views/footer.php'); ?>

