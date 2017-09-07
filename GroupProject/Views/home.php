<?php include('Views/header.php') ?>



<main>
    <aside class="right">
        <br>
        <form action="index.php"  method="post">
            <input type="submit" class="reserve" value="RESERVATIONS"> 
            <input type='hidden' name='action' value='reservation'>
        </form>



        <?php include('Waitlist.php'); ?>
    </aside>

    <aside class="left">
        <br>
        <?php if ($user->getUserRole() == "Manager") { ?>
        <form action="index.php"  method="post">
            <input type='hidden' name='action' value='manageServers'>
            <input type="submit" class="serverList" value="Manage Servers"> 
        </form>
        <?php } ?> 

        <h2>Active Servers</h2>
        <hr>

        <table class="server">
            <?php foreach ($allActiveServers as $server): ?>

                <tr>
                    <td><?php echo $server->getServerFName(); ?></td> 
                    <td><?php echo $server->getServerLName(); ?></td>

                </tr>

            <?php endforeach; ?>
        </table>


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
                        <input type="hidden" name="action" value="4 seat">

                        <input type="button" class="table4j100" value="#14--4 seat"> 

                    </form>
           
                </div>
            <?php elseif ($store_number == 101) : ?>
                <div class="home101"> 
                    <form action="index.php"  method="post">
                        <input type="hidden" name="action" value="2 seat">

                        <input type="button" class="table2a101" value="#1--2 seat"> 

                    </form>
                    <form action="index.php"  method="post">
                        <input type="hidden" name="action" value="2 seat">

                        <input type="button" class="table2b101" value="#2--2 seat"> 

                    </form>
                    <form action="index.php"  method="post">
                        <input type="hidden" name="action" value="2 seat">

                        <input type="button" class="table2c101" value="#3--2 seat"> 

                    </form>
                    <form action="index.php"  method="post">
                        <input type="hidden" name="action" value="2 seat">

                        <input type="button" class="table2d101" value="#4--2 seat"> 

                    </form>




                    <form action="index.php"  method="post">
                        <input type="hidden" name="action" value="8 seat">

                        <input type="button" class="table8a101" value="#19--8 seat"> 

                    </form>  <form action="index.php"  method="post">
                        <input type="hidden" name="action" value="8 seat">

                        <input type="button" class="table8b101" value="#23--8 seat"> 

                    </form>

                    <form action="index.php"  method="post">
                        <input type="hidden" name="action" value="table7">

                        <input type="button" class="table6a101" value="#15---6 seat"> 

                    </form>
                    <form action="index.php"  method="post">
                        <input type="hidden" name="action" value="6 seat">

                        <input type="button" class="table6b101" value="#16--6 seat"> 

                    </form>
                    <form action="index.php"  method="post">
                        <input type="hidden" name="action" value="table5">

                        <input type="button" class="table6c101" value="#17--6 seat"> 

                    </form>
                    <form action="index.php"  method="post">
                        <input type="hidden" name="action" value="table6">

                        <input type="button" class="table6d101" value="#18--6 seat"> 

                    </form>

                    <form action="index.php"  method="post">
                        <input type="hidden" name="action" value="4 seat">

                        <input type="button" class="table4a101" value="#6--4 seat"> 

                    </form>
                    <form action="index.php"  method="post">
                        <input type="hidden" name="action" value="4 seat">

                        <input type="button" class="table4b101" value="#7--4 seat"> 

                    </form>
                    <form action="index.php"  method="post">
                        <input type="hidden" name="action" value="4 seat">

                        <input type="button" class="table4c101" value="#8--4 seat"> 

                    </form>
                    <form action="index.php"  method="post">
                        <input type="hidden" name="action" value="4 seat">

                        <input type="button" class="table4d101" value="#9--4 seat"> 

                    </form>
                    <form action="index.php"  method="post">
                        <input type="hidden" name="action" value="4 seat">

                        <input type="button" class="table4e101" value="#10--4 seat"> 

                    </form>
                    <form action="index.php"  method="post">
                        <input type="hidden" name="action" value="4 seat">

                        <input type="button" class="table4f101" value="#11--4 seat"> 

                    </form>
                    <form action="index.php"  method="post">
                        <input type="hidden" name="action" value="4 seat">

                        <input type="button" class="table4g101" value="#12--4 seat"> 

                    </form>
                    <form action="index.php"  method="post">
                        <input type="hidden" name="action" value="4 seat">

                        <input type="button" class="table4h101" value="#13--4 seat"> 

                    </form>
                    <form action="index.php"  method="post">
                        <input type="hidden" name="action" value="4 seat">

                        <input type="button" class="table4i101" value="#14--4 seat"> 

                    </form>
                     <form action="index.php"  method="post">
                        <input type="hidden" name="action" value="4 seat">

                        <input type="button" class="table4j101" value="#12--4 seat"> 

                    </form>
                    <form action="index.php"  method="post">
                        <input type="hidden" name="action" value="4 seat">

                        <input type="button" class="table4k101" value="#13--4 seat"> 

                    </form>
                    <form action="index.php"  method="post">
                        <input type="hidden" name="action" value="4 seat">

                        <input type="button" class="table4l101" value="#14--4 seat"> 

                    </form>
          
                </div>
            <?php elseif ($store_number == 102) : ?>
                <div class="home102">
                    <form action="index.php"  method="post">
                        <input type="hidden" name="action" value="2 seat">

                        <input type="button" class="table2a102" value="#1--2 seat"> 

                    </form>
                    <form action="index.php"  method="post">
                        <input type="hidden" name="action" value="2 seat">

                        <input type="button" class="table2b102" value="#2--2 seat"> 

                    </form>
                    <form action="index.php"  method="post">
                        <input type="hidden" name="action" value="2 seat">

                        <input type="button" class="table2c102" value="#3--2 seat"> 

                    </form>
                    <form action="index.php"  method="post">
                        <input type="hidden" name="action" value="2 seat">

                        <input type="button" class="table2d102" value="#4--2 seat"> 

                    </form>
                            <form action="index.php"  method="post">
                        <input type="hidden" name="action" value="2 seat">

                        <input type="button" class="table2e102" value="#2--2 seat"> 

                    </form>
                    <form action="index.php"  method="post">
                        <input type="hidden" name="action" value="2 seat">

                        <input type="button" class="table2f102" value="#3--2 seat"> 

                    </form>
                    <form action="index.php"  method="post">
                        <input type="hidden" name="action" value="2 seat">

                        <input type="button" class="table2g102" value="#4--2 seat"> 

                    </form>

                    <form action="index.php"  method="post">
                        <input type="hidden" name="action" value="8 seat">

                        <input type="button" class="table8a102" value="#19--8 seat"> 

                    </form>  <form action="index.php"  method="post">
                        <input type="hidden" name="action" value="8 seat">

                        <input type="button" class="table8b102" value="#23--8 seat"> 

                    </form>

                    <form action="index.php"  method="post">
                        <input type="hidden" name="action" value="table7">

                        <input type="button" class="table6a102" value="#15---6 seat"> 

                    </form>
                    <form action="index.php"  method="post">
                        <input type="hidden" name="action" value="6 seat">

                        <input type="button" class="table6b102" value="#16--6 seat"> 

                    </form>
                    <form action="index.php"  method="post">
                        <input type="hidden" name="action" value="table5">

                        <input type="button" class="table6c102" value="#17--6 seat"> 

                    </form>
                    <form action="index.php"  method="post">
                        <input type="hidden" name="action" value="table6">

                        <input type="button" class="table6d102" value="#18--6 seat"> 

                    </form>

                    <form action="index.php"  method="post">
                        <input type="hidden" name="action" value="table8">

                        <input type="button" class="table6e102" value="#19--6 seat"> 

                    </form>
                    

                    <form action="index.php"  method="post">
                        <input type="hidden" name="action" value="4 seat">

                        <input type="button" class="table4a102" value="#6--4 seat"> 

                    </form>
                    <form action="index.php"  method="post">
                        <input type="hidden" name="action" value="4 seat">

                        <input type="button" class="table4b102" value="#7--4 seat"> 

                    </form>
                    <form action="index.php"  method="post">
                        <input type="hidden" name="action" value="4 seat">

                        <input type="button" class="table4c102" value="#8--4 seat"> 

                    </form>
                    <form action="index.php"  method="post">
                        <input type="hidden" name="action" value="4 seat">

                        <input type="button" class="table4d102" value="#9--4 seat"> 

                    </form>
                    <form action="index.php"  method="post">
                        <input type="hidden" name="action" value="4 seat">

                        <input type="button" class="table4e102" value="#10--4 seat"> 

                    </form>
                    <form action="index.php"  method="post">
                        <input type="hidden" name="action" value="4 seat">

                        <input type="button" class="table4f102" value="#11--4 seat"> 

                    </form>
                    <form action="index.php"  method="post">
                        <input type="hidden" name="action" value="4 seat">

                        <input type="button" class="table4g102" value="#12--4 seat"> 

                    </form>
                    <form action="index.php"  method="post">
                        <input type="hidden" name="action" value="4 seat">

                        <input type="button" class="table4h102" value="#13--4 seat"> 

                    </form>
                    <form action="index.php"  method="post">
                        <input type="hidden" name="action" value="4 seat">

                        <input type="button" class="table4i102" value="#14--4 seat"> 

                    </form>
              
     
         
                </div>
            <?php elseif ($store_number == 103) : ?>
                <div class="home103">
                    <form action="index.php"  method="post">
                        <input type="hidden" name="action" value="2 seat">

                        <input type="button" class="table2a103" value="#1--2 seat"> 

                    </form>
                    <form action="index.php"  method="post">
                        <input type="hidden" name="action" value="2 seat">

                        <input type="button" class="table2b103" value="#2--2 seat"> 

                    </form>
                          <form action="index.php"  method="post">
                        <input type="hidden" name="action" value="2 seat">

                        <input type="button" class="table2c103" value="#3--2 seat"> 

                    </form>
                    <form action="index.php"  method="post">
                        <input type="hidden" name="action" value="2 seat">

                        <input type="button" class="table2d103" value="#3--2 seat"> 

                    </form>
                      <form action="index.php"  method="post">
                        <input type="hidden" name="action" value="2 seat">

                        <input type="button" class="table2e103" value="#1--2 seat"> 

                    </form>
                    <form action="index.php"  method="post">
                        <input type="hidden" name="action" value="2 seat">

                        <input type="button" class="table2f103" value="#2--2 seat"> 

                    </form>
                    <form action="index.php"  method="post">
                        <input type="hidden" name="action" value="2 seat">

                        <input type="button" class="table2g103" value="#3--2 seat"> 

                    </form>
               <form action="index.php"  method="post">
                        <input type="hidden" name="action" value="2 seat">

                        <input type="button" class="table2h103" value="#3--2 seat"> 

                    </form>




                    <form action="index.php"  method="post">
                        <input type="hidden" name="action" value="8 seat">

                        <input type="button" class="table8a103" value="#19--8 seat"> 

                    </form>  

                    <form action="index.php"  method="post">
                        <input type="hidden" name="action" value="table6">

                        <input type="button" class="table6a103" value="#18--6 seat"> 

                    </form>

                    <form action="index.php"  method="post">
                        <input type="hidden" name="action" value="table8">

                        <input type="button" class="table6b103" value="#19--6 seat"> 

                    </form>
                    <form action="index.php"  method="post">
                        <input type="hidden" name="action" value="table8">

                        <input type="button" class="table6c103" value="#21--6 seat"> 

                    </form>

                    <form action="index.php"  method="post">
                        <input type="hidden" name="action" value="4 seat">

                        <input type="button" class="table4a103" value="#6--4 seat"> 

                    </form>
                    <form action="index.php"  method="post">
                        <input type="hidden" name="action" value="4 seat">

                        <input type="button" class="table4b103" value="#7--4 seat"> 

                    </form>
                    <form action="index.php"  method="post">
                        <input type="hidden" name="action" value="4 seat">

                        <input type="button" class="table4c103" value="#8--4 seat"> 

                    </form>
                    <form action="index.php"  method="post">
                        <input type="hidden" name="action" value="4 seat">

                        <input type="button" class="table4d103" value="#9--4 seat"> 

                    </form>
                    <form action="index.php"  method="post">
                        <input type="hidden" name="action" value="4 seat">

                        <input type="button" class="table4e103" value="#10--4 seat"> 

                    </form>
                    <form action="index.php"  method="post">
                        <input type="hidden" name="action" value="4 seat">

                        <input type="button" class="table4f103" value="#11--4 seat"> 

                    </form>
                    <form action="index.php"  method="post">
                        <input type="hidden" name="action" value="4 seat">

                        <input type="button" class="table4g103" value="#12--4 seat"> 

                    </form>
                    <form action="index.php"  method="post">
                        <input type="hidden" name="action" value="4 seat">

                        <input type="button" class="table4h103" value="#13--4 seat"> 

                    </form>
                    <form action="index.php"  method="post">
                        <input type="hidden" name="action" value="4 seat">

                        <input type="button" class="table4i103" value="#14--4 seat"> 

                    </form>
                     <form action="index.php"  method="post">
                        <input type="hidden" name="action" value="4 seat">

                        <input type="button" class="table4j103" value="#12--4 seat"> 

                    </form>
                    <form action="index.php"  method="post">
                        <input type="hidden" name="action" value="4 seat">

                        <input type="button" class="table4k103" value="#13--4 seat"> 

                    </form>
                    <form action="index.php"  method="post">
                        <input type="hidden" name="action" value="4 seat">

                        <input type="button" class="table4l103" value="#14--4 seat"> 

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


<?php include('Views/footer.php'); ?>

