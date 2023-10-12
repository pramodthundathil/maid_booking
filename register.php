<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <scrip src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
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

// echo "Connected successfully";

$fname = "";
$email = "";
$uname = "";
$pswd = "";
$pswd1 = "";
$mess= "";

if (isset($_POST['submit'])){

  $fname = $_POST['fname'];
  $uname = $_POST['uname'];
  $email = $_POST['email'];
  $pswd = $_POST['pswd'];
  $pswd1 = $_POST['pswd1'];

  $sqlexits = "SELECT * FROM user WHERE username='$uname' ";
  $result = $conn->query($sqlexits);

  if ($result->num_rows > 0 ){
    // echo '"Username Already Exists"';
    $mess = "Username exists";

    // header("location:register.php");

  }
  elseif ($pswd != $pswd1 ){
    $mess = "Password Not Matchs";
  }
  else{
    $sql = "INSERT INTO user (username,password,firstname,email) VALUES ('$uname','$pswd','$fname','$email')";
  
    if (mysqli_query($conn, $sql)) {
      echo "<script type = \"text/javascript\">
            alert(\"registration Successful.................\");
            window.location = (\"login.php\")
            </script>";

    } 
    else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
  
    }
  } 
?>

<?php include 'components/loginheader.php' ?>

<div class="login-container">
        <h3>Registration</h3>
       <span style="color:red"> <?php print $mess; ?></span></h5>
        <form action="" method="POST">
            <input type="text" name="uname" required placeholder="Username">
            <input type="text" name="fname" required placeholder="First Name">
            <input type="email" name="email" required placeholder="Email">
            <input type="password" name="pswd" required placeholder="Password">
            <input type="password" name="pswd1" required placeholder="Confirm Password">
            <br><br>
            <input class="button" type="submit" name="submit" value="Submit">
        </form>
        <br><br>
      <span> Have an Account Clik <a href="login.php">Here</a></span>
</div>
<?php include 'components/footer.php'?>
</body>
</html>