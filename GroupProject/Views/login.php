<?php include('header.php'); ?>


<section class='login'>
    <br>
    
   
    <fieldset class="admin_log">
       
        <form action="index.php" method="post">
            <input type="hidden" name="action" value="admin_attempt">
              <h5>FOR ADMIN USE ONLY!</h5>
              <p><?php if(isset($message)){ echo htmlspecialchars($message);} ?></p>
        <label>User Name: </label>
        <input type="text" name="user" value="" required>
        <br>
        
         <label>Password: </label>
        <input type="text" name="password" value="" required>
        <br>
        <input type="submit" value="Login">
    </form>
        
        
    </fieldset>
      
    
</section>


<?php include('footer.php');



