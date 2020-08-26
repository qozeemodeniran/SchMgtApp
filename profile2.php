<?php

session_start(); 
 $name = "";
 $email = "";
 $phone = "";

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="veiwport" content="width=device-width, initial-scale=1.0" />
        <title><?php echo $_SESSION['username']; ?></title>
        <link rel="stylesheet" type="text/css" href="css/style.css"/>
    </head>
    <body>
        <header>
        <?php include 'includes/header.php'; ?>
        </header>

        <?php  if (isset($_SESSION['username'])) : ?>
        <div id="profile">
            <section class="half2">
                <div id="greeting">
                    <p id="welcome">Welcome<strong> @<?php echo $_SESSION['username']; ?></strong></p><br>
                    <img height="200" width="200" src="images/profile.JPG" alt="photo" />
                    <!-- <button><a href="#enroll">Begin Course Regigstration</a></button> -->
                    <p><button id="logout"><a href="login.php?logout='1'">logout</a></button></p>
                    <?php endif ?>
                </div>
            </section>

            <section class="half2">
                
            </section>
        </div>

        <footer>
            <div>
            <?php include 'includes/footer.php'; ?>
            </div>
        </footer>
    </body>
</html>