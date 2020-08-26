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

  if (isset($_POST['Submit']))
  {
    header("location: profile2.php");
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
            <section class="half">
                <div id="greeting">
                    <p id="welcome">Welcome<strong> @<?php echo $_SESSION['username']; ?></strong></p><br>
                    <img height="200" width="200" src="images/profile.JPG" alt="photo" />
                    <!-- <button><a href="#enroll">Begin Course Regigstration</a></button> -->
                    <p><button id="logout"><a href="login.php?logout='1'">logout</a></button></p>
                    <?php endif ?>
                </div>
            </section>

            <section class="half">
                <div id="coursereg">
                    <h1 id="enroll">Course Registration(Plese your subjects)</h1>

                    <section class="one-third">
                    <h2>SCIENCE</h2>
                    <div class="subjects">
                    <form method="post" action="checkbox.php">
                        
                        English<input type="checkbox" name="subject[ ]" value="English" /><br/>
                        Mathematics<input type="checkbox" name="subject[ ]" value="Mathematics" /><br/>
                        Physics<input type="checkbox" name="subject[ ]" value="Physics" /><br/>
                        Chemistry<input type="checkbox" name="subject[ ]" value="Chemistry" /><br/>
                        Biology<input type="checkbox" name="subject[ ]" value="Biology" /><br/><br/>
                        <div class="add"><input type="submit" name="Submit" value="Submit"/></div>
                    </form>
                    </div>
                    </section>

                    <section class="one-third">
                    <h2>COMMERCIAL</h2>
                    <div class="subjects">
                    <form method="post" action="checkbox.php">
                     
                        English<input type="checkbox" name="subject[ ]" value="English" /><br/>
                        Mathematics<input type="checkbox" name="subject[ ]" value="Mathematics" /><br/>
                        Commerce<input type="checkbox" name="subject[ ]" value="Commerce"  /><br/>
                        Financial Accounting<input type="checkbox" name="subject[ ]" value="Financial Accounting"  /><br/>
                        Economics<input type="checkbox" name="subject[ ]" value="Economics"  /><br/><br/>
                    <div class="add"><input type="submit" name="Submit" value="Submit"/></div>
                    <?php include 'checkbox.php'; ?>
                    </form>
                    </div>
                    </section>

                    <section class="one-third">
                    <h2>ARTS</h2>
                    <div class="subjects">
                    <form method="post" action="checkbox.php">
                     
                        English<input type="checkbox" name="subject[ ]" value="English" /><br/>
                        Mathematics<input type="checkbox" name="subject[ ]" value="Mathematics" /><br/>
                        History<input type="checkbox" name="subject[ ]" value="History" /><br/>
                        Literature In English<input type="checkbox" name="subject[ ]" value="Lit. in English" /><br/>
                        Food and Nutrition<input type="checkbox" name="subject[ ]" value="Food and Nut." /><br/><br/>
                        <div class="add"><input type="submit" name="Submit" value="Submit"/></div>
                    </form>
                    </div>
                    </section>
                </div>
            </section>
        </div>
        
        <footer>
            <div>
            <?php include 'includes/footer.php'; ?>
            </div>
        </footer>
    </body>
</html>