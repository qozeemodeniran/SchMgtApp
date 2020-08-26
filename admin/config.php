

<?php
session_start();


//Variables declaration
$name = "";
$email = "";
$phone = "";
$username = "";
$chk = "";
$errors = array();

//Database connection
$db = mysqli_connect('localhost', 'root', '', 'schmgt');

//USER REGISTRATION
if (isset($_POST['reg'])) 
{
  // receive all input values from the form
  $name = mysqli_real_escape_string($db, $_POST['name']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $phone = mysqli_real_escape_string($db, $_POST['phone']);
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

// FORM VALIDATION AND ERROR CHECKING
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

  //CHECKING IF USER WITH SAME INFORMATION (USERNAME AND EMAIL) DOES NOT ALREADY EXIST.
  $user_check_query = "SELECT * FROM students WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  //PROCEED WITH USER REGISTRATION IF NO ERROR RECORDED.
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO students (name, email, phone, username, password) 
  			  VALUES('$name', '$email', '$phone', '$username', '$password')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: profile.php');
  }
}


// LOGIN USER
if (isset($_POST['login'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) {
    array_push($errors, "Username is required");
  }
  if (empty($password)) {
    array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
    $password = md5($password);
    $query = "SELECT * FROM students WHERE username='$username' AND password='$password'";
    $results = mysqli_query($db, $query);
    
    if (mysqli_num_rows($results) == 1) {
      $_SESSION['username'] = $username;
      $_SESSION['name'] = $name;
      $_SESSION['success'] = "You are now logged in.";
      header('location: profile.php');
    }else {
      array_push($errors, "Wrong username/password combination");
    }
  }
  
}


?>