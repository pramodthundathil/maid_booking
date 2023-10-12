<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque&family=Young+Serif&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
    <title>Document</title>
</head>

<body>
    <?php include 'components/loginheader.php' ?>
    <?php include 'dbconnection.php' ?>

    <?php 
       $msg = "";
       $username = "";
       $password = "";

       if (isset($_POST['login'])){
            $username = $_POST['uname'];
            $password = $_POST['pswd'];

            $sql = "SELECT * FROM admin WHERE username='$username' AND password='$password' ";
            $res = $conn->query($sql);
            $num = $res->num_rows;
            $rows = $res->fetch_assoc();

            if ($num >0){
                session_start();
                $_SESSION['uname'] = $username;
                $_SESSION['password'] = $password;

                echo "<script type = \"text/javascript\">
					alert(\"Login Successful.................\");
					window.location = (\"adminindex.php\")
					</script>";
            }
            else{
                $msg = "Username or Password Incorrect";
            }
       }

    ?>

    <div class="login-container">
        <h3>Admin</h3>
        <span style="color:red"><?php print $msg; ?></span>
        <form method="post">
            <input type="text" name="uname" required placeholder="Username">
            <input type="password" name="pswd" required placeholder="Password">
            <br><br>
            <input class="button" value="login" name="login" type="submit"></input>
        </form>
        <br><br>
        Go To <a href="login.php">UserLogin</a>  
    </div>
<?php include 'components/footer.php'?>
</body>

</html>