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
    <link rel="stylesheet" href="css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque&family=Young+Serif&display=swap"
        rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>Made Boking System</title>
    <style>
        .head{
            text-align: center;
        }
        select,input{
            width:90%;
            padding:5px;
            outline:none;
            margin:5px;
            border-radius:10px;
            border: .5px solid rgba(138, 43, 226,.2);

        }
        .content{
            width:80%;
            margin: auto;
            border: .5px solid ;
            border-radius: 10px;
            padding: 20px;
            text-align: center;
        }
    </style>
</head>

<body>
    <?php include 'components/adminheadder.php'?>
    <?php include 'dbconnection.php' ?>

    <?php 
    $sql = "SELECT * FROM maid WHERE id=$_GET[id]";
    $rs = $conn->query($sql);
    $rws = $rs->fetch_assoc();

    $service = "";
        $company = "";
        $service_name = "";
        $hourly_rate = "";
        $monthly_rate = "";
        

        if(isset($_POST['submit'])){

            $service = $_POST['service'];
            $company = $_POST['company'];
            $service_name = $_POST['name'];
            $hourly_rate = $_POST['loc'];
            $monthly_rate = $_POST['m_rate'];
            
            $sql = "UPDATE maid SET Service = '$service', location = '$hourly_rate', monthlyrate = '$monthly_rate', Service_Name = '$service_name', Company_name = '$company' WHERE id = {$_GET['id']}";


            if (mysqli_query($conn, $sql)) {
                echo "<script type = \"text/javascript\">
                      alert(\"Maid Added success\");
                      </script>";
          
              } 
              else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
              }

            }
    
    ?>
    <div class="container mt-5">

        <h3 class='text-center text-info'>Upadte Maid</h3>
<div class="content">
        <form method="post">
            <label for="">Maid Name:</label><br>
            <input type="text" value="<?php echo $rws['Company_name'] ?>" required name="company"><br><br>

            <label for="">Description:</label><br>
            <input type="text" value="<?php echo $rws['Service_Name'] ?>" required name="name"><br><br>

            <label for="">Location:</label><br>
            <input type="text" value="<?php echo $rws['location'] ?>" required name="loc"><br><br>

            <label for="">Salary</label><br>
            <input type="text" value="<?php echo $rws['monthlyrate'] ?>" name="m_rate"><br><br>
            <label for="">Service Category:</label><br>
                <select name="service" required>
                    <option value="" disabled selected>-------------</option>
                    <option value="Cleaning Service">Cleaning Service</option>
                    <option value="Baby Sitter">Baby Sitter</option>
                    <option value="Elderly Care">Elderly Care</option>
                    <option value="Cooking">Cooking</option>
                </select><br><br>

                <button name="submit" type="submit" value="submit" class="btn btn-info">Update</button>
        </form>
    </div>

    </div>
    <?php include 'components/footer.php'?>


    </body>