<?php include 'admin/config.php'; ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<meta name="veiwport" content="width=device-width, initial-scale=1.0" />
<title>Login</title>
<link rel="stylesheet" type="text/css" href="css/style.css"/>
</head>
<body>
    <header>
    <?php include 'includes/header.php'; ?>
    </header>
  
<div id="register">
<form method="post" action="login.php">
    <?php include 'admin/error.php'; ?>
<fieldset>
<legend>Student Login</legend>
Username  <br/>
<input type="text" name="username" />
<br/><br/>
Password  <br/>
<input type="password" name="password" />
<br/><br/>
<input type="submit" name="login" />
</fieldset>
</form>
</div>
<footer>
    <div>
        <?php include 'includes/footer.php'; ?>
    </div>
</footer>
</body>
</html>