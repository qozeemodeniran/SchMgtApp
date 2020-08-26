<?php include 'admin/config.php'; ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<meta name="veiwport" content="width=device-width, initial-scale=1.0" />
<title>Register</title>
<link rel="stylesheet" type="text/css" href="css/style.css"/>
</head>
<body>
    <header>
    <?php include 'includes/header.php'; ?>
    </header>
  
<div id="register">
<form method="post" action="register.php">
<?php include 'admin/error.php'; ?>
<fieldset>
<legend>Student Registration</legend>
Name<br>
 <input type="text" name="name" placeholder="first and lastnames only" value="<?php echo $name; ?>">
 <br><br>
 Email<br>
 <input type="email" name="email" placeholder="valid email" value="<?php echo $email; ?>">
 <br><br>
 Phone<br>
 <input type="text" name="phone" placeholder="Mobile phone number" value="<?php echo $phone; ?>">
 <br><br>
 Prefered Username<br>
 <input type="text" name="username" placeholder="Username" value="<?php echo $username; ?>">
 <br><br>
 Password<br>
 <input type="password" name="password_1" placeholder="password">
 <br><br>
 Retype password<br>
 <input type="password" name="password_2" placeholder="password">
 <br><br>
<input type="submit" name="reg" />
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