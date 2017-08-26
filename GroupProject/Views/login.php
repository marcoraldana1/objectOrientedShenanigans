<?php include('header.php'); ?>


<section class='login'>
    <form action="index.php" method="post">
        <input type="hidden" name="action" value="login">
        <label>Store Number: </label>
        <input type="text" name="store_number" value="<?php echo htmlspecialchars($store_number); ?>" autofocus  required>
        
        
        <br>
        
        <input type="submit" value="LOGIN">
    </form>
    <br>
    <br>
    
   
    <fieldset class="admin_log">
       
        <form action="index.php" method="post">
            <input type="hidden" name="action" value="admin">
              <h5>FOR ADMIN USE ONLY!</h5>
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



