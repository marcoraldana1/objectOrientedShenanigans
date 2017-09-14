<?php include('Views/header.php') ?>



<main>
    <aside class="right">
        <br>
        <div class="resButton">
        <form action="index.php"  method="post">
            <input type="submit" class="reserve" value="RESERVATIONS"> 
            <input type='hidden' name='action' value='reservation'>
        </form>
        </div>


        <?php include('Waitlist.php'); ?>
    </aside>

    <aside class="left">
        <br>
        
        <?php if ($user->getUserRole() == "Manager") { ?>
            <form action="index.php"  method="post">
                <input type='hidden' name='action' value='manageServers'>
                <input type="submit" class="serverList" value="MANAGE SERVERS"> 
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

        <h2>Store # <?php echo htmlspecialchars($user->getStoreNum()); ?></h2>

        <section>
            <?php if ($store_number == 100) : ?>
                <div class="home100">
                    <form action="index.php"  method="post">
                        <input type="hidden" name="action" value="tableAssign">
                        <input type="hidden" name ="tableNum" value="1">
                        <input type="hidden" name ="tableSize" value="2">
                        <input type="submit" class="table1_100" value="#1--2 seat"> 

                    </form>
                    <form action="index.php"  method="post">
                        <input type="hidden" name="action" value="tableAssign">
                        <input type="hidden" name ="tableNum" value="2">
                        <input type="hidden" name ="tableSize" value="2">
                        <input type="submit" class="table2_100" value="#2--2 seat"> 

                    </form>
                    <form action="index.php"  method="post">
                        <input type="hidden" name="action" value="tableAssign">
                        <input type="hidden" name ="tableNum" value="3">
                        <input type="hidden" name ="tableSize" value="2">
                        <input type="submit" class="table3_100" value="#3--2 seat"> 

                    </form>
                    <form action="index.php"  method="post">
                        <input type="hidden" name="action" value="tableAssign">
                        <input type="hidden" name ="tableNum" value="4">
                        <input type="hidden" name ="tableSize" value="2">
                        <input type="submit" class="table4_100" value="#4--2 seat"> 

                    </form>

                    <form action="index.php"  method="post">
                        <input type="hidden" name="action" value="tableAssign">
                        <input type="hidden" name ="tableNum" value="18">
                        <input type="hidden" name ="tableSize" value="8">
                        <input type="submit" class="table18_100" value="#18--8 seat"> 

                    </form>  
                    <form action="index.php"  method="post">
                        <input type="hidden" name="action" value="tableAssign">
                        <input type="hidden" name ="tableNum" value="22">
                        <input type="hidden" name ="tableSize" value="8">
                        <input type="submit" class="table22_100" value="#22--8 seat"> 

                    </form>

                    <form action="index.php"  method="post">
                        <input type="hidden" name="action" value="tableAssign">
                        <input type="hidden" name ="tableNum" value="14">
                        <input type="hidden" name ="tableSize" value="6">
                        <input type="submit" class="table14_100" value="#14---6 seat"> 

                    </form>
                    <form action="index.php"  method="post">
                        <input type="hidden" name="action" value="tableAssign">
                        <input type="hidden" name ="tableNum" value="15">
                        <input type="hidden" name ="tableSize" value="6">
                        <input type="submit" class="table15_100" value="#15--6 seat"> 

                    </form>
                    <form action="index.php"  method="post">
                        <input type="hidden" name="action" value="tableAssign">
                        <input type="hidden" name ="tableNum" value="16">
                        <input type="hidden" name ="tableSize" value="6">
                        <input type="submit" class="table16_100" value="#16--6 seat"> 

                    </form>
                    <form action="index.php"  method="post">
                        <input type="hidden" name="action" value="tableAssign">
                        <input type="hidden" name ="tableNum" value="17">
                        <input type="hidden" name ="tableSize" value="6">
                        <input type="submit" class="table17_100" value="#17--6 seat"> 

                    </form>

                    <form action="index.php"  method="post">
                        <input type="hidden" name="action" value="tableAssign">
                        <input type="hidden" name ="tableNum" value="19">
                        <input type="hidden" name ="tableSize" value="6">
                        <input type="submit" class="table19_100" value="#19--6 seat"> 

                    </form>
                    <form action="index.php"  method="post">
                        <input type="hidden" name="action" value="tableAssign">
                        <input type="hidden" name ="tableNum" value="21">
                        <input type="hidden" name ="tableSize" value="6">
                        <input type="submit" class="table21_100" value="#21--6 seat"> 

                    </form>

                    <form action="index.php"  method="post">
                        <input type="hidden" name="action" value="tableAssign">
                        <input type="hidden" name ="tableNum" value="5">
                        <input type="hidden" name ="tableSize" value="4">
                        <input type="submit" class="table5_100" value="#5--4 seat"> 

                    </form>
                    <form action="index.php"  method="post">
                        <input type="hidden" name="action" value="tableAssign">
                        <input type="hidden" name ="tableNum" value="6">
                        <input type="hidden" name ="tableSize" value="4">
                        <input type="submit" class="table6_100" value="#6--4 seat"> 

                    </form>
                    <form action="index.php"  method="post">
                        <input type="hidden" name="action" value="tableAssign">
                        <input type="hidden" name ="tableNum" value="7">
                        <input type="hidden" name ="tableSize" value="4">
                        <input type="submit" class="table7_100" value="#7--4 seat"> 

                    </form>
                    <form action="index.php"  method="post">
                        <input type="hidden" name="action" value="tableAssign">
                        <input type="hidden" name ="tableNum" value="8">
                        <input type="hidden" name ="tableSize" value="4">
                        <input type="submit" class="table8_100" value="#8--4 seat"> 

                    </form>
                    <form action="index.php"  method="post">
                        <input type="hidden" name="action" value="tableAssign">
                        <input type="hidden" name ="tableNum" value="9">
                        <input type="hidden" name ="tableSize" value="4">
                        <input type="submit" class="table9_100" value="#9--4 seat"> 

                    </form>
                    <form action="index.php"  method="post">
                        <input type="hidden" name="action" value="tableAssign">
                        <input type="hidden" name ="tableNum" value="10">
                        <input type="hidden" name ="tableSize" value="4">
                        <input type="submit" class="table10_100" value="#10--4 seat"> 

                    </form>
                    <form action="index.php"  method="post">
                        <input type="hidden" name="action" value="tableAssign">
                        <input type="hidden" name ="tableNum" value="11">
                        <input type="hidden" name ="tableSize" value="4">
                        <input type="submit" class="table11_100" value="#11--4 seat"> 

                    </form>
                    <form action="index.php"  method="post">
                        <input type="hidden" name="action" value="tableAssign">
                        <input type="hidden" name ="tableNum" value="12">
                        <input type="hidden" name ="tableSize" value="4">
                        <input type="submit" class="table12_100" value="#12--4 seat"> 

                    </form>
                    <form action="index.php"  method="post">
                        <input type="hidden" name="action" value="tableAssign">
                        <input type="hidden" name ="tableNum" value="13">
                        <input type="hidden" name ="tableSize" value="4">
                        <input type="submit" class="table13_100" value="#13--4 seat"> 

                    </form>
                    <form action="index.php"  method="post">
                        <input type="hidden" name="action" value="tableAssign">
                        <input type="hidden" name ="tableNum" value="20">
                        <input type="hidden" name ="tableSize" value="4">
                        <input type="submit" class="table20_100" value="#20--4 seat"> 

                    </form>

                </div>
            <?php elseif ($store_number == 101) : ?>
                <div class="home101"> 
                    <form action="index.php"  method="post">
                        <input type="hidden" name="action" value="tableAssign">
                        <input type="hidden" name ="tableNum" value="1">
                        <input type="hidden" name ="tableSize" value="2">
                        <input type="submit" class="table1_101" value="#1--2 seat"> 

                    </form>
                    <form action="index.php"  method="post">
                        <input type="hidden" name="action" value="tableAssign">
                        <input type="hidden" name ="tableNum" value="2">
                        <input type="hidden" name ="tableSize" value="2">
                        <input type="submit" class="table2_101" value="#2--2 seat"> 

                    </form>
                    <form action="index.php"  method="post">
                        <input type="hidden" name="action" value="tableAssign">
                        <input type="hidden" name ="tableNum" value="3">
                        <input type="hidden" name ="tableSize" value="2">
                        <input type="submit" class="table3_101" value="#3--2 seat"> 

                    </form>
                    <form action="index.php"  method="post">
                        <input type="hidden" name="action" value="tableAssign">
                        <input type="hidden" name ="tableNum" value="4">
                        <input type="hidden" name ="tableSize" value="2">
                        <input type="submit" class="table4_101" value="#4--2 seat"> 

                    </form>

                    <form action="index.php"  method="post">
                        <input type="hidden" name="action" value="tableAssign">
                        <input type="hidden" name ="tableNum" value="5">
                        <input type="hidden" name ="tableSize" value="8">
                        <input type="submit" class="table5_101" value="#5--8 seat"> 

                    </form>  <form action="index.php"  method="post">
                        <input type="hidden" name="action" value="tableAssign">
                        <input type="hidden" name ="tableNum" value="19">
                        <input type="hidden" name ="tableSize" value="8">
                        <input type="submit" class="table19_101" value="#19--8 seat"> 

                    </form>

                    <form action="index.php"  method="post">
                        <input type="hidden" name="action" value="tableAssign">
                        <input type="hidden" name ="tableNum" value="15">
                        <input type="hidden" name ="tableSize" value="6">
                        <input type="submit" class="table15_101" value="#15---6 seat"> 

                    </form>
                    <form action="index.php"  method="post">
                        <input type="hidden" name="action" value="tableAssign">
                        <input type="hidden" name ="tableNum" value="16">
                        <input type="hidden" name ="tableSize" value="6">
                        <input type="submit" class="table16_101" value="#16--6 seat"> 

                    </form>
                    <form action="index.php"  method="post">
                        <input type="hidden" name="action" value="tableAssign">
                        <input type="hidden" name ="tableNum" value="17">
                        <input type="hidden" name ="tableSize" value="6">
                        <input type="submit" class="table17_101" value="#17--6 seat"> 

                    </form>
                    <form action="index.php"  method="post">
                        <input type="hidden" name="action" value="tableAssign">
                        <input type="hidden" name ="tableNum" value="18">
                        <input type="hidden" name ="tableSize" value="6">
                        <input type="submit" class="table18_101" value="#18--6 seat"> 

                    </form>

                    <form action="index.php"  method="post">
                        <input type="hidden" name="action" value="tableAssign">
                        <input type="hidden" name ="tableNum" value="6">
                        <input type="hidden" name ="tableSize" value="4">
                        <input type="submit" class="table6_101" value="#6--4 seat"> 

                    </form>
                    <form action="index.php"  method="post">
                        <input type="hidden" name="action" value="tableAssign">
                        <input type="hidden" name ="tableNum" value="7">
                        <input type="hidden" name ="tableSize" value="4">
                        <input type="submit" class="table7_101" value="#7--4 seat"> 

                    </form>
                    <form action="index.php"  method="post">
                        <input type="hidden" name="action" value="tableAssign">
                        <input type="hidden" name ="tableNum" value="8">
                        <input type="hidden" name ="tableSize" value="4">
                        <input type="submit" class="table8_101" value="#8--4 seat"> 

                    </form>
                    <form action="index.php"  method="post">
                        <input type="hidden" name="action" value="tableAssign">
                        <input type="hidden" name ="tableNum" value="9">
                        <input type="hidden" name ="tableSize" value="4">
                        <input type="submit" class="table9_101" value="#9--4 seat"> 

                    </form>
                    <form action="index.php"  method="post">
                        <input type="hidden" name="action" value="tableAssign">
                        <input type="hidden" name ="tableNum" value="10">
                        <input type="hidden" name ="tableSize" value="4">
                        <input type="submit" class="table10_101" value="#10--4 seat"> 

                    </form>
                    <form action="index.php"  method="post">
                        <input type="hidden" name="action" value="tableAssign">
                        <input type="hidden" name ="tableNum" value="11">
                        <input type="hidden" name ="tableSize" value="4">
                        <input type="submit" class="table11_101" value="#11--4 seat"> 

                    </form>
                    <form action="index.php"  method="post">
                        <input type="hidden" name="action" value="tableAssign">
                        <input type="hidden" name ="tableNum" value="12">
                        <input type="hidden" name ="tableSize" value="4">
                        <input type="submit" class="table12_101" value="#12--4 seat"> 

                    </form>
                    <form action="index.php"  method="post">
                        <input type="hidden" name="action" value="tableAssign">
                        <input type="hidden" name ="tableNum" value="13">
                        <input type="hidden" name ="tableSize" value="4">
                        <input type="submit" class="table13_101" value="#13--4 seat"> 

                    </form>
                    <form action="index.php"  method="post">
                        <input type="hidden" name="action" value="tableAssign">
                        <input type="hidden" name ="tableNum" value="14">
                        <input type="hidden" name ="tableSize" value="4">
                        <input type="submit" class="table14_101" value="#14--4 seat"> 

                    </form>
                    <form action="index.php"  method="post">
                        <input type="hidden" name="action" value="tableAssign">
                        <input type="hidden" name ="tableNum" value="20">
                        <input type="hidden" name ="tableSize" value="4">
                        <input type="submit" class="table20_101" value="#20--4 seat"> 

                    </form>
                    <form action="index.php"  method="post">
                        <input type="hidden" name="action" value="tableAssign">
                        <input type="hidden" name ="tableNum" value="21">
                        <input type="hidden" name ="tableSize" value="4">
                        <input type="submit" class="table21_101" value="#21--4 seat"> 

                    </form>
                    <form action="index.php"  method="post">
                        <input type="hidden" name="action" value="tableAssign">
                        <input type="hidden" name ="tableNum" value="22">
                        <input type="hidden" name ="tableSize" value="4">
                        <input type="submit" class="table22_101" value="#22--4 seat"> 

                    </form>

                </div>
            <?php elseif ($store_number == 102) : ?>
                <div class="home102">
                    <form action="index.php"  method="post">
                        <input type="hidden" name="action" value="tableAssign">
                        <input type="hidden" name ="tableNum" value="6">
                        <input type="hidden" name ="tableSize" value="2">
                        <input type="submit" class="table6_102" value="#6--2 seat"> 

                    </form>
                    <form action="index.php"  method="post">
                        <input type="hidden" name="action" value="tableAssign">
                        <input type="hidden" name ="tableNum" value="7">
                        <input type="hidden" name ="tableSize" value="2">
                        <input type="submit" class="table7_102" value="#7--2 seat"> 

                    </form>
                    <form action="index.php"  method="post">
                        <input type="hidden" name="action" value="tableAssign">
                        <input type="hidden" name ="tableNum" value="8">
                        <input type="hidden" name ="tableSize" value="2">
                        <input type="submit" class="table8_102" value="#8--2 seat"> 

                    </form>
                    <form action="index.php"  method="post">
                        <input type="hidden" name="action" value="tableAssign">
                        <input type="hidden" name ="tableNum" value="9">
                        <input type="hidden" name ="tableSize" value="2">
                        <input type="submit" class="table9_102" value="#9--2 seat"> 

                    </form>
                    <form action="index.php"  method="post">
                        <input type="hidden" name="action" value="tableAssign">
                        <input type="hidden" name ="tableNum" value="10">
                        <input type="hidden" name ="tableSize" value="2">
                        <input type="submit" class="table10_102" value="#10--2 seat"> 

                    </form>
                    <form action="index.php"  method="post">
                        <input type="hidden" name="action" value="tableAssign">
                        <input type="hidden" name ="tableNum" value="11">
                        <input type="hidden" name ="tableSize" value="2">
                        <input type="submit" class="table11_102" value="#11--2 seat"> 

                    </form>
                    <form action="index.php"  method="post">
                        <input type="hidden" name="action" value="tableAssign">
                        <input type="hidden" name ="tableNum" value="16">
                        <input type="hidden" name ="tableSize" value="2">
                        <input type="submit" class="table16_102" value="#16--2 seat"> 

                    </form>

                    <form action="index.php"  method="post">
                        <input type="hidden" name="action" value="tableAssign">
                        <input type="hidden" name ="tableNum" value="1">
                        <input type="hidden" name ="tableSize" value="8">
                        <input type="submit" class="table1_102" value="#1--8 seat"> 
                    </form>

                    <form action="index.php"  method="post">
                        <input type="hidden" name="action" value="tableAssign">
                        <input type="hidden" name ="tableNum" value="17">
                        <input type="hidden" name ="tableSize" value="6">
                        <input type="submit" class="table17_102" value="#17---6 seat"> 

                    </form>
                    <form action="index.php"  method="post">
                        <input type="hidden" name="action" value="tableAssign">
                        <input type="hidden" name ="tableNum" value="18">
                        <input type="hidden" name ="tableSize" value="6">
                        <input type="submit" class="table18_102" value="#18--6 seat"> 

                    </form>
                    <form action="index.php"  method="post">
                        <input type="hidden" name="action" value="tableAssign">
                        <input type="hidden" name ="tableNum" value="19">
                        <input type="hidden" name ="tableSize" value="6">
                        <input type="submit" class="table19_102" value="#19--6 seat"> 

                    </form>
                    <form action="index.php"  method="post">
                        <input type="hidden" name="action" value="tableAssign">
                        <input type="hidden" name ="tableNum" value="20">
                        <input type="hidden" name ="tableSize" value="6">
                        <input type="submit" class="table20_102" value="#20--6 seat"> 

                    </form>

                    <form action="index.php"  method="post">
                        <input type="hidden" name="action" value="tableAssign">
                        <input type="hidden" name ="tableNum" value="22">
                        <input type="hidden" name ="tableSize" value="6">
                        <input type="submit" class="table22_102" value="#22--6 seat"> 

                    </form>


                    <form action="index.php"  method="post">
                        <input type="hidden" name="action" value="tableAssign">
                        <input type="hidden" name ="tableNum" value="2">
                        <input type="hidden" name ="tableSize" value="4">
                        <input type="submit" class="table2_102" value="#2--4 seat"> 

                    </form>
                    <form action="index.php"  method="post">
                        <input type="hidden" name="action" value="tableAssign">
                        <input type="hidden" name ="tableNum" value="3">
                        <input type="hidden" name ="tableSize" value="4">
                        <input type="submit" class="table3_102" value="#3--4 seat"> 

                    </form>
                    <form action="index.php"  method="post">
                        <input type="hidden" name="action" value="tableAssign">
                        <input type="hidden" name ="tableNum" value="4">
                        <input type="hidden" name ="tableSize" value="4">
                        <input type="submit" class="table4_102" value="#4--4 seat"> 

                    </form>
                    <form action="index.php"  method="post">
                        <input type="hidden" name="action" value="tableAssign">
                        <input type="hidden" name ="tableNum" value="5">
                        <input type="hidden" name ="tableSize" value="4">
                        <input type="submit" class="table5_102" value="#5--4 seat"> 

                    </form>
                    <form action="index.php"  method="post">
                        <input type="hidden" name="action" value="tableAssign">
                        <input type="hidden" name ="tableNum" value="12">
                        <input type="hidden" name ="tableSize" value="4">
                        <input type="submit" class="table12_102" value="#12--4 seat"> 

                    </form>
                    <form action="index.php"  method="post">
                        <input type="hidden" name="action" value="tableAssign">
                        <input type="hidden" name ="tableNum" value="13">
                        <input type="hidden" name ="tableSize" value="4">
                        <input type="submit" class="table13_102" value="#13--4 seat"> 

                    </form>
                    <form action="index.php"  method="post">
                        <input type="hidden" name="action" value="tableAssign">
                        <input type="hidden" name ="tableNum" value="14">
                        <input type="hidden" name ="tableSize" value="4">
                        <input type="submit" class="table14_102" value="#14--4 seat"> 

                    </form>
                    <form action="index.php"  method="post">
                        <input type="hidden" name="action" value="tableAssign">
                        <input type="hidden" name ="tableNum" value="15">
                        <input type="hidden" name ="tableSize" value="4">
                        <input type="submit" class="table15_102" value="#15--4 seat"> 

                    </form>
                    <form action="index.php"  method="post">
                        <input type="hidden" name="action" value="tableAssign">
                        <input type="hidden" name ="tableNum" value="21">
                        <input type="hidden" name ="tableSize" value="4">
                        <input type="submit" class="table21_102" value="#21--4 seat"> 

                    </form>



                </div>
            <?php elseif ($store_number == 103) : ?>
                <div class="home103">
                    <form action="index.php"  method="post">
                        <input type="hidden" name="action" value="tableAssign">
                        <input type="hidden" name ="tableNum" value="6">
                        <input type="hidden" name ="tableSize" value="2">
                        <input type="submit" class="table6_103" value="#6--2 seat"> 

                    </form>
                    <form action="index.php"  method="post">
                        <input type="hidden" name="action" value="tableAssign">
                        <input type="hidden" name ="tableNum" value="7">
                        <input type="hidden" name ="tableSize" value="2">
                        <input type="submit" class="table7_103" value="#7--2 seat"> 

                    </form>
                    <form action="index.php"  method="post">
                        <input type="hidden" name="action" value="tableAssign">
                        <input type="hidden" name ="tableNum" value="8">
                        <input type="hidden" name ="tableSize" value="2">
                        <input type="submit" class="table8_103" value="#8--2 seat"> 

                    </form>
                    <form action="index.php"  method="post">
                        <input type="hidden" name="action" value="tableAssign">
                        <input type="hidden" name ="tableNum" value="9">
                        <input type="hidden" name ="tableSize" value="2">
                        <input type="submit" class="table9_103" value="#9--2 seat"> 

                    </form>
                    <form action="index.php"  method="post">
                        <input type="hidden" name="action" value="tableAssign">
                        <input type="hidden" name ="tableNum" value="10">
                        <input type="hidden" name ="tableSize" value="2">
                        <input type="submit" class="table10_103" value="#10--2 seat"> 

                    </form>

                    <form action="index.php"  method="post">
                        <input type="hidden" name="action" value="tableAssign">
                        <input type="hidden" name ="tableNum" value="11">
                        <input type="hidden" name ="tableSize" value="2">
                        <input type="submit" class="table11_103" value="#11--2 seat"> 

                    </form>
                    <form action="index.php"  method="post">
                        <input type="hidden" name="action" value="tableAssign">
                        <input type="hidden" name ="tableNum" value="16">
                        <input type="hidden" name ="tableSize" value="2">
                        <input type="submit" class="table16_103" value="#16--2 seat"> 

                    </form>

                    <form action="index.php"  method="post">
                        <input type="hidden" name="action" value="tableAssign">
                        <input type="hidden" name ="tableNum" value="1">
                        <input type="hidden" name ="tableSize" value="8">
                        <input type="submit" class="table1_103" value="#1--8 seat"> 

                    </form>  

                    <form action="index.php"  method="post">
                        <input type="hidden" name="action" value="tableAssign">
                        <input type="hidden" name ="tableNum" value="17">
                        <input type="hidden" name ="tableSize" value="6">
                        <input type="submit" class="table17_103" value="#17--6 seat"> 

                    </form>

                    <form action="index.php"  method="post">
                        <input type="hidden" name="action" value="tableAssign">
                        <input type="hidden" name ="tableNum" value="18">
                        <input type="hidden" name ="tableSize" value="6">
                        <input type="submit" class="table18_103" value="#18--6 seat"> 

                    </form>
                    <form action="index.php"  method="post">
                        <input type="hidden" name="action" value="tableAssign">
                        <input type="hidden" name ="tableNum" value="19">
                        <input type="hidden" name ="tableSize" value="6">
                        <input type="submit" class="table19_103" value="#19--6 seat"> 

                    </form>

                    <form action="index.php"  method="post">
                        <input type="hidden" name="action" value="tableAssign">
                        <input type="hidden" name ="tableNum" value="2">
                        <input type="hidden" name ="tableSize" value="4">
                        <input type="submit" class="table2_103" value="#2--4 seat"> 

                    </form>
                    <form action="index.php"  method="post">
                        <input type="hidden" name="action" value="tableAssign">
                        <input type="hidden" name ="tableNum" value="3">
                        <input type="hidden" name ="tableSize" value="4">
                        <input type="submit" class="table3_103" value="#3--4 seat"> 

                    </form>
                    <form action="index.php"  method="post">
                        <input type="hidden" name="action" value="tableAssign">
                        <input type="hidden" name ="tableNum" value="4">
                        <input type="hidden" name ="tableSize" value="4">
                        <input type="submit" class="table4_103" value="#4--4 seat"> 

                    </form>
                    <form action="index.php"  method="post">
                        <input type="hidden" name="action" value="tableAssign">
                        <input type="hidden" name ="tableNum" value="5">
                        <input type="hidden" name ="tableSize" value="4">
                        <input type="submit" class="table5_103" value="#5--4 seat"> 

                    </form>
                    <form action="index.php"  method="post">
                        <input type="hidden" name="action" value="tableAssign">
                        <input type="hidden" name ="tableNum" value="12">
                        <input type="hidden" name ="tableSize" value="4">
                        <input type="submit" class="table12_103" value="#12--4 seat"> 

                    </form>
                    <form action="index.php"  method="post">
                        <input type="hidden" name="action" value="tableAssign">
                        <input type="hidden" name ="tableNum" value="13">
                        <input type="hidden" name ="tableSize" value="4">
                        <input type="submit" class="table13_103" value="#13--4 seat"> 

                    </form>
                    <form action="index.php"  method="post">
                        <input type="hidden" name="action" value="tableAssign">
                        <input type="hidden" name ="tableNum" value="14">
                        <input type="hidden" name ="tableSize" value="4">
                        <input type="submit" class="table14_103" value="#14--4 seat"> 

                    </form>
                    <form action="index.php"  method="post">
                        <input type="hidden" name="action" value="tableAssign">
                        <input type="hidden" name ="tableNum" value="15">
                        <input type="hidden" name ="tableSize" value="4">
                        <input type="submit" class="table15_103" value="#15--4 seat"> 

                    </form>
                    <form action="index.php"  method="post">
                        <input type="hidden" name="action" value="tableAssign">
                        <input type="hidden" name ="tableNum" value="20">
                        <input type="hidden" name ="tableSize" value="4">
                        <input type="submit" class="table20_103" value="#20--4 seat"> 

                    </form>
                    <form action="index.php"  method="post">
                        <input type="hidden" name="action" value="tableAssign">
                        <input type="hidden" name ="tableNum" value="21">
                        <input type="hidden" name ="tableSize" value="4">
                        <input type="submit" class="table21_103" value="#21--4 seat"> 

                    </form>
                    <form action="index.php"  method="post">
                        <input type="hidden" name="action" value="tableAssign">
                        <input type="hidden" name ="tableNum" value="22">
                        <input type="hidden" name ="tableSize" value="4">
                        <input type="submit" class="table22_103" value="#22--4 seat"> 

                    </form>
                    <form action="index.php"  method="post">
                        <input type="hidden" name="action" value="tableAssign">
                        <input type="hidden" name ="tableNum" value="23">
                        <input type="hidden" name ="tableSize" value="4">
                        <input type="submit" class="table23_103" value="#23--4 seat"> 

                    </form>


                </div>
            <?php else: ?>
                <div class="home">


                    <form action="index.php"  method="post">
                        <input type="hidden" name="action" value="tableAssign">
                        <input type="hidden" name ="tableNum" value="1">
                        <input type="hidden" name ="tableSize" value="2">
                        <input type="submit" class="table1_100" value="#1--2 seat"> 

                    </form>
                    <form action="index.php"  method="post">
                        <input type="hidden" name="action" value="tableAssign">
                        <input type="hidden" name ="tableNum" value="2">
                        <input type="hidden" name ="tableSize" value="2">
                        <input type="submit" class="table2_100" value="#2--2 seat"> 

                    </form>
                    <form action="index.php"  method="post">
                        <input type="hidden" name="action" value="tableAssign">
                        <input type="hidden" name ="tableNum" value="3">
                        <input type="hidden" name ="tableSize" value="2">
                        <input type="submit" class="table3_100" value="#3--2 seat"> 

                    </form>
                    <form action="index.php"  method="post">
                        <input type="hidden" name="action" value="tableAssign">
                        <input type="hidden" name ="tableNum" value="4">
                        <input type="hidden" name ="tableSize" value="2">
                        <input type="submit" class="table4_100" value="#4--2 seat"> 

                    </form>

                    <form action="index.php"  method="post">
                        <input type="hidden" name="action" value="tableAssign">
                        <input type="hidden" name ="tableNum" value="18">
                        <input type="hidden" name ="tableSize" value="8">
                        <input type="submit" class="table18_100" value="#18--8 seat"> 

                    </form>  
                    <form action="index.php"  method="post">
                        <input type="hidden" name="action" value="tableAssign">
                        <input type="hidden" name ="tableNum" value="22">
                        <input type="hidden" name ="tableSize" value="8">
                        <input type="submit" class="table22_100" value="#22--8 seat"> 

                    </form>

                    <form action="index.php"  method="post">
                        <input type="hidden" name="action" value="tableAssign">
                        <input type="hidden" name ="tableNum" value="14">
                        <input type="hidden" name ="tableSize" value="6">
                        <input type="submit" class="table14_100" value="#14---6 seat"> 

                    </form>
                    <form action="index.php"  method="post">
                        <input type="hidden" name="action" value="tableAssign">
                        <input type="hidden" name ="tableNum" value="15">
                        <input type="hidden" name ="tableSize" value="6">
                        <input type="submit" class="table15_100" value="#15--6 seat"> 

                    </form>
                    <form action="index.php"  method="post">
                        <input type="hidden" name="action" value="tableAssign">
                        <input type="hidden" name ="tableNum" value="16">
                        <input type="hidden" name ="tableSize" value="6">
                        <input type="submit" class="table16_100" value="#16--6 seat"> 

                    </form>
                    <form action="index.php"  method="post">
                        <input type="hidden" name="action" value="tableAssign">
                        <input type="hidden" name ="tableNum" value="17">
                        <input type="hidden" name ="tableSize" value="6">
                        <input type="submit" class="table17_100" value="#17--6 seat"> 

                    </form>

                    <form action="index.php"  method="post">
                        <input type="hidden" name="action" value="tableAssign">
                        <input type="hidden" name ="tableNum" value="19">
                        <input type="hidden" name ="tableSize" value="6">
                        <input type="submit" class="table19_100" value="#19--6 seat"> 

                    </form>
                    <form action="index.php"  method="post">
                        <input type="hidden" name="action" value="tableAssign">
                        <input type="hidden" name ="tableNum" value="21">
                        <input type="hidden" name ="tableSize" value="6">
                        <input type="submit" class="table21_100" value="#21--6 seat"> 

                    </form>

                    <form action="index.php"  method="post">
                        <input type="hidden" name="action" value="tableAssign">
                        <input type="hidden" name ="tableNum" value="5">
                        <input type="hidden" name ="tableSize" value="4">
                        <input type="submit" class="table5_100" value="#5--4 seat"> 

                    </form>
                    <form action="index.php"  method="post">
                        <input type="hidden" name="action" value="tableAssign">
                        <input type="hidden" name ="tableNum" value="6">
                        <input type="hidden" name ="tableSize" value="4">
                        <input type="submit" class="table6_100" value="#6--4 seat"> 

                    </form>
                    <form action="index.php"  method="post">
                        <input type="hidden" name="action" value="tableAssign">
                        <input type="hidden" name ="tableNum" value="7">
                        <input type="hidden" name ="tableSize" value="4">
                        <input type="submit" class="table7_100" value="#7--4 seat"> 

                    </form>
                    <form action="index.php"  method="post">
                        <input type="hidden" name="action" value="tableAssign">
                        <input type="hidden" name ="tableNum" value="8">
                        <input type="hidden" name ="tableSize" value="4">
                        <input type="submit" class="table8_100" value="#8--4 seat"> 

                    </form>
                    <form action="index.php"  method="post">
                        <input type="hidden" name="action" value="tableAssign">
                        <input type="hidden" name ="tableNum" value="9">
                        <input type="hidden" name ="tableSize" value="4">
                        <input type="submit" class="table9_100" value="#9--4 seat"> 

                    </form>
                    <form action="index.php"  method="post">
                        <input type="hidden" name="action" value="tableAssign">
                        <input type="hidden" name ="tableNum" value="10">
                        <input type="hidden" name ="tableSize" value="4">
                        <input type="submit" class="table10_100" value="#10--4 seat"> 

                    </form>
                    <form action="index.php"  method="post">
                        <input type="hidden" name="action" value="tableAssign">
                        <input type="hidden" name ="tableNum" value="11">
                        <input type="hidden" name ="tableSize" value="4">
                        <input type="submit" class="table11_100" value="#11--4 seat"> 

                    </form>
                    <form action="index.php"  method="post">
                        <input type="hidden" name="action" value="tableAssign">
                        <input type="hidden" name ="tableNum" value="12">
                        <input type="hidden" name ="tableSize" value="4">
                        <input type="submit" class="table12_100" value="#12--4 seat"> 

                    </form>
                    <form action="index.php"  method="post">
                        <input type="hidden" name="action" value="tableAssign">
                        <input type="hidden" name ="tableNum" value="13">
                        <input type="hidden" name ="tableSize" value="4">
                        <input type="submit" class="table13_100" value="#13--4 seat"> 

                    </form>
                    <form action="index.php"  method="post">
                        <input type="hidden" name="action" value="tableAssign">
                        <input type="hidden" name ="tableNum" value="20">
                        <input type="hidden" name ="tableSize" value="4">
                        <input type="submit" class="table20_100" value="#20--4 seat"> 

                    </form>

                </div>
            <?php endif; ?>
        </section>

    </article>
</main>


<?php include('Views/footer.php'); ?>

