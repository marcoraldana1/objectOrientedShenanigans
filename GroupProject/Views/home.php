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
           
                    <section>
                        
                        
                      <form action="index.php"  method="post">
                            <input type="hidden" name="action" value="table22">

                            <input type="button" class="table2a" value="2 seat"> 

                        </form>
                        <form action="index.php"  method="post">
                            <input type="hidden" name="action" value="table23">

                            <input type="button" class="table2b" value="2 seat"> 

                        </form>
                        <form action="index.php"  method="post">
                            <input type="hidden" name="action" value="table24">

                            <input type="button" class="table2c" value="2 seat"> 

                        </form>
                        <form action="index.php"  method="post">
                            <input type="hidden" name="action" value="table25">

                            <input type="button" class="table2d" value="2 seat"> 

                        </form>
                        <form action="index.php"  method="post">
                            <input type="hidden" name="action" value="table21">

                            <input type="button" class="table2e" value="2 seat"> 

                        </form>
                        <img class="upperbar" src="images/upperbartop.png" alt="" width="63px" height="40px">
                       <img class="lowerbar" src="images/lowerbartop_1.png" alt="" width="40px" height="325px">
                            
                     
                        <form action="index.php"  method="post">
                            <input type="hidden" name="action" value="table2">

                            <input type="button" class="table8b" value="8 seat"> 

                        </form>  <form action="index.php"  method="post">
                            <input type="hidden" name="action" value="table3">

                            <input type="button" class="table8c" value="8 seat"> 

                        </form>


                        <form action="index.php"  method="post">
                            <input type="hidden" name="action" value="table4">

                            <input type="button" class="table6a" value="6 seat"> 

                        </form>
                        <form action="index.php"  method="post">
                            <input type="hidden" name="action" value="table5">

                            <input type="button" class="table6b" value="6 seat"> 

                        </form>
                        <form action="index.php"  method="post">
                            <input type="hidden" name="action" value="table6">

                            <input type="button" class="table6c" value="6 seat"> 

                        </form>
                        <form action="index.php"  method="post">
                            <input type="hidden" name="action" value="table7">

                            <input type="button" class="table6d" value="6 seat"> 

                        </form>
                        <form action="index.php"  method="post">
                            <input type="hidden" name="action" value="table8">

                            <input type="button" class="table6e" value="6 seat"> 

                        </form>
                             <form action="index.php"  method="post">
                            <input type="hidden" name="action" value="table8">

                            <input type="button" class="table6f" value="6 seat"> 

                        </form>
                       
                        <form action="index.php"  method="post">
                            <input type="hidden" name="action" value="table13">

                            <input type="button" class="table4e" value="4 seat"> 

                        </form>
                        <form action="index.php"  method="post">
                            <input type="hidden" name="action" value="table14">

                            <input type="button" class="table4f" value="4 seat"> 

                        </form>
                        <form action="index.php"  method="post">
                            <input type="hidden" name="action" value="table15">

                            <input type="button" class="table4g" value="4 seat"> 

                        </form>
                        <form action="index.php"  method="post">
                            <input type="hidden" name="action" value="table16">

                            <input type="button" class="table4h" value="4 seat"> 

                        </form>
                        <form action="index.php"  method="post">
                            <input type="hidden" name="action" value="table17">

                            <input type="button" class="table4i" value="4 seat"> 

                        </form>
                        <form action="index.php"  method="post">
                            <input type="hidden" name="action" value="table18">

                            <input type="button" class="table4j" value="4 seat"> 

                        </form>
                        <form action="index.php"  method="post">
                            <input type="hidden" name="action" value="table19">

                            <input type="button" class="table4k" value="4 seat"> 

                        </form>
                        <form action="index.php"  method="post">
                            <input type="hidden" name="action" value="table20">

                            <input type="button" class="table4l" value="4 seat"> 

                        </form>
                          <form action="index.php"  method="post">
                            <input type="hidden" name="action" value="table21">

                            <input type="button" class="table4m" value="4 seat"> 

                        </form>
                           <form action="index.php"  method="post">
                            <input type="hidden" name="action" value="table21">

                            <input type="button" class="table4n" value="4 seat"> 

                        </form>
              


                    </section>
             
            </article>
        </main>
    </body>
    
<?php include('Views/footer.php');?>

