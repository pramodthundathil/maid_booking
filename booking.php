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
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    
  <title>Made Boking System</title>
  <style>
      .content{
          width:80%;
          border: .5px solid gray;
          border-radius:10px;
          padding:10px;
          margin:auto;
          
      }
      .data{
        border: .5px solid gray;
        border-radius:10px;
        padding:10px;
        margin:auto; 
        display:flex;
        justify-content:space-evenly; 
      }
      .form{
        border: .5px solid gray;
        border-radius:10px; 
        padding:10px;
        text-align:center;
      }
      .form input, select,textarea{
          width:70%;
          padding:6px;
          border:.5px solid blueviolet;
          outline:none;
      }
      .items{
          font-size:20px;
            color:blue;
      }
      .items .head{
          font-size:10px;
          color:black;
      }
  </style>
</head>
<body>
<?php include 'components/headder.php'?>
<?php include ('dbconnection.php'); ?>
<?php 
        $sql = "SELECT * FROM maid WHERE id='$_GET[id]' ";
        $rs = $conn->query($sql);
		$rws = $rs->fetch_assoc();
?>

<div class="container mt-5">
    <div class="content">
        <h4 class="text-danger text-center">Book Our Service</h4>
        <div class="container">
            <div class="data bg-info">
                <div class="items"><span class="head">Service:</span> <?php echo $rws['Service'] ?> </div>
                <div class="items"><span class="head">Company:</span> <?php echo $rws['Company_name']?></div>
                <div class="items"><span class="head">Hourly Rate:</span> ₹<?php echo $rws['Hourlyrate']?></div>
                <div class="items"><span class="head">Monthly Rate:</span> ₹<?php echo $rws['monthlyrate']?></div>

            </div>
        </div>

        <h5 class="text-dark text-center mt-3">Bookig Details</h5>
        <div class="container">
            <div class="form">
                <form method="post">

                    Customer Name: <br>
                    <input type="hidden" value="<?php echo $rws['id']?>" name=service>
                    <input type="text" name='customer' required><br><br>
                    Phone: <br>
                    <input type="number" name='Phone'><br><br>
                    Address: <br>
                    <textarea rows="5" cols="50" name="address" required></textarea> <br><br>
                    Duration Of service: <br>
                    <select name="duration" id="" required>
                        <option value="" selected disabled>-------------</option>
                        <option value="Hour">Hourly</option>
                        <option value="Month">Monthly</option>
                    </select>
<br><br>
                    <button type="submit" value="submit" name="submit" class="btn btn-warning">Book</button>
                </form>
                <br><br>
            </div>
        </div>
    </div>
</div>
<br><br><br>

<?php include ('components/footer.php'); ?>

</body>
</html>