<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque&family=Young+Serif&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
    <title>Document</title>
    <style>
        body{
            background-image: url(images/maid_background.png);
            background-repeat: no-repeat;
            background-position:left;
            background-attachment: fixed;

    
        }
    </style>
</head>
<body>

<?php include ('dbconnection.php'); ?>
<?php
$uname = "";
$pswd = "";
$msg = "";
$rs = "";


if (isset($_POST['submit'])){

  $uname = $_POST['uname'];
  $pswd = $_POST['pswd'];

  $sql = "SELECT * FROM user WHERE username='$uname' AND password='$pswd'";
  
  $rs = $conn->query($sql);
	$num = $rs->num_rows;
	$rows = $rs->fetch_assoc();
	if($num > 0){
		session_start();
		$_SESSION['uname'] = $rows['username'];
		$_SESSION['pswd'] = $rows['password'];
    $_SESSION['name'] = $rows['firstname'];
    $_SESSION['id'] = $rows['id'];

		echo "<script type = \"text/javascript\">
					alert(\"Login Successful.................\");
					window.location = (\"index.php\")
					</script>";
          }
  else{
    $msg = "Username or Password Incorrect";
  }
}
?>

<?php include 'components/loginheader.php' ?>

<div class="login-container">
        <h3>Login</h3>
        <span style="color:red"><?php print $msg; ?></span>
        <form method="post">
            <input type="text" name="uname" placeholder="Username">
            <input type="password" name="pswd" placeholder="Password">
            <br><br>
            <input class="button" value="submit" name="submit" type="submit"></input>
        </form>
        <br><br>
      <span> Don't Have an Account Clik <a href="register.php">Here</a></span>

</div>

<?php include 'components/footer.php' ?>
</body>
</html>