<!DOCTYPE html>
<html>
    <head>
        <title>O'Shea Shenanigans Pub & Grill</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style/main.css">
    </head>
    <body>
    <header>

        <nav>

            <ul>
           
                <div class="home_controls">
                
                    <form action="index.php" method="post">
                        
                        <?PHP 
                        if ($user == null) { ?>
                            <li><input type="hidden" name="action" value="admin_attempt"></li>
                            <li>FOR ADMIN USE ONLY!</li>
                            <li><label for="user">User Name:</label></li>
                            <li><input type="text" name="user" value=""></li>

                            <li><label for="password">Password:</label></li>
                            <li><input type="text" name="password" value="" ></li>

                            <li><input class="nav_login" type="submit" name="admin-attempt" value="LOGIN">
                        <?PHP }
                        else { ?>
                            <li><input class="nav_login" type="submit" name="action" value="Logout">
                        <?PHP } ?>
                    </form>
                </div>
                <div class="home_controls2">
                    <?PHP if ($user != null) { ?>
                    <form action="index.php" class="home_reg" method="post">
                                <li><input type="hidden" name="action" value="update"><li>
                               
                                <li><label>Store# <?PHP echo $user->getStoreNum(); ?>
                                </label></li>
                                 <li><input  type="submit" value="Update"></li>
                    </form>
                    <?PHP } ?>
                </div>
            </ul>
        </nav>
                <p>
                    <img  src="images/main_title1.png" alt="" width="1000px" height="100px">
                </p>
                </header>






