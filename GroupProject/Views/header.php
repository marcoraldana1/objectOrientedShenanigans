<!DOCTYPE html>
<html>
    <head>
        <title>O'Shea Shenanigans Pub & Grill</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style/main.css">
    </head>
    <header>

        <nav>

            <ul>
           
                <div class="home_controls">
                
                    <form action="index.php" method="post">
                        <li><input type="hidden" name="action" value="admin"></li>
                        <li>FOR ADMIN USE ONLY!</li>
                        <li><label for="user">User Name:</label></li>
                        <li><input type="text" name="user" value="<?php echo htmlspecialchars($user); ?>" autofocus ></li>

                        <li><label for="password">Password:</label></li>
                        <li><input type="text" name="password" value="<?php echo htmlspecialchars($password); ?>" ></li>
                        
                        <li><input class="nav_login" type="submit" name="admin-attempt" value="LOGIN">
                    </form>
                </div>
                 <div class="home_controls2">
                            <form action="index.php" class="home_reg" method="post">
                                <li><input type="hidden" name="action" value="update"><li>
                               
                                <li><label>Change Store#</label></li>
                                 <li><input  type="submit" value="Update"></li>
</form>
            </ul>
        </nav>
                <p>
                    <img  src="images/main_title1.png" alt="" width="1000px" height="100px">
                </p>
                </header>






