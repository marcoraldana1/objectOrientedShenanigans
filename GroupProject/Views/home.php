<?php include('Views/header.php')?>



        <main>
            <aside class="right">
                <form action="index.php"  method="post">
                    <input type="submit" class="reserve" value="Reservations"> 
                </form>
                <br>
                <br>

                <h2>Waitlist</h2>
                


            </aside>

            <aside class="left">

                <br>
                <br>

                <h2>Active Servers</h2>
          
                <form action="index.php"  method="post">
                    <input type="submit" class="serverList" value="Server List"> 
                </form>

            </aside>
            <article>

                    <h2>Store # <?php echo htmlspecialchars($store_number); ?></h2>
           
                    <section class="home">
                        
                        
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
              


                    </section>
             
            </article>
        </main>
    </body>
    
<?php include('Views/footer.php');?>

