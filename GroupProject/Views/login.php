<?php include('header.php'); ?>


<section class='login'>
    <br>
    
   
    <fieldset class="admin_log">
       
        <form action="index.php" method="post">
            <input type="hidden" name="action" value="admin_attempt">
              <h5>FOR ADMIN USE ONLY!</h5>
              <p><?php if(isset($message)){ echo htmlspecialchars($message);} ?></p>
        <label>User Name: </label>
        <input type="text" name="user" value="<?php echo htmlspecialchars($user); ?>" required>
        <br>
        
         <label>Password: </label>
        <input type="text" name="password" value="<?php echo htmlspecialchars($password); ?>" required>
        <br>
        <input type="submit" value="LOGIN">
    </form>
        
        
    </fieldset>
      
    
</section>


<?php include('footer.php');



