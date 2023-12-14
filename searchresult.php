



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
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    
  <title>Made Boking System</title>
  <style>
      .maid-card{
          width:250px;
          height:300px;
          border:.5px solid gray;
          border-radius:10px;
          padding:10px;

      }
      .maid-card h5{
        text-align:center;
        color:blueviolet;
      }
      .container{
        display:flex;
        justify-content:space-evenly;
        flex-wrap:wrap;
        align-items:center;
      }
  </style>
</head>
<body>
    <?php include 'components/headder.php'?>
    <div class="container mt-5">
<?php
$search = "";

if (isset($_POST['submit'])){

  $search = $_POST['search'];
}
  $sql = "SELECT * FROM maid WHERE Service LIKE '$search%' ";
  $sql2 = "SELECT * FROM maid WHERE  monthlyrate < '$search' ";
  $sql3 = "SELECT * FROM maid WHERE location LIKE '$search%' ";

    $rs = $conn->query($sql);
    $rs2 = $conn->query($sql2);
    $rs3 = $conn->query($sql3);

    while($rws = $rs->fetch_assoc()){
        ?>
            <div class="maid-card mt-4">
                <h5><?php echo $rws['Service']?></h5>
                <p><span style="font-size:10px;">Maid Name: </span> <?php echo $rws['Company_name']?></p>
                <p><?php echo $rws['Service_Name']?></p>
                <!-- <span >Hourly Rate:</span><span style="color:green"> ₹<?php echo $rws['Hourlyrate']?></span> -->
              
                <span>Salary:</span><span style="color:green"> ₹<?php echo $rws['monthlyrate']?></span>
                  <br>
                <span>Location: <?php echo $rws['location']?></span><br>
                   
                  <?php 
                  if ($rws["totalrater"] == 0){
                  ?>
                  <span>Rating:  <i class="bi bi-star text-warning" style="font-size:larger"> <?php echo $rws["Rating"] ?> /5 </i></span>
                  <?php 
                  }else{?>
                  <span>Rating: <i class="bi bi-star text-warning" style="font-size:larger"> <?php echo $rws["Rating"]/ $rws["totalrater"] ?>  /5 </i></span>
<?php }?>
                <br><br>
                <a href="booking.php?id=<?php echo $rws['id']?>" class="btn btn-warning btn-full">Book Now</a>
                
            </div>
            <?php
            }
            ?>
            <br><br>
            </div>
    </div>
    <br><br>
    <!-- <h4 class="text-center">Rate Wise Search</h4> -->
    <div class="container mt-5">
<?php

while($rws1 = $rs2->fetch_assoc()){
        ?>
            <div class="maid-card mt-4">
                
                <h5><?php echo $rws1['Service']?></h5>
                <p><span style="font-size:10px;">Maid Name: </span> <?php echo $rws1['Company_name']?></p>
                <p><?php echo $rws1['Service_Name']?></p>
                <!-- <span >Hourly Rate:</span><span style="color:green"> ₹<?php echo $rws1['Hourlyrate']?></span> -->
              
                <span>Salary:</span><span style="color:green"> ₹<?php echo $rws1['monthlyrate']?></span>
                  <br>
                <span>Location: <?php echo $rws1['location']?></span> <br>
                  <?php 
                  if ($rws1["totalrater"] == 0){
                  ?>
                  <span>Rating:  <i class="bi bi-star text-warning" style="font-size:larger"> <?php echo $rws1["Rating"] ?> /5 </i></span>
                  <?php 
                  }else{?>
                  <span>Rating: <i class="bi bi-star text-warning" style="font-size:larger"> <?php echo $rws1["Rating"]/ $rws1["totalrater"] ?>  /5 </i></span>
<?php }?>
                <br><br>
                <a href="booking.php?id=<?php echo $rws['id']?>" class="btn btn-warning btn-full">Book Now</a>
                
            </div>
            <?php
            }
            ?>
            
        </div>
    </div>
    <div class="container mt-5">
<?php
    while($rws2 = $rs3->fetch_assoc()){
        ?>
            <div class="maid-card mt-4">
                <h5><?php echo $rws2['Service']?></h5>
                <p><span style="font-size:10px;">Maid Name: </span> <?php echo $rws2['Company_name']?></p>
                <p><?php echo $rws2['Service_Name']?></p>
                <!-- <span >Hourly Rate:</span><span style="color:green"> ₹<?php echo $rws2['Hourlyrate']?></span> -->
              
                <span>Salary:</span><span style="color:green"> ₹<?php echo $rws2['monthlyrate']?></span>
                  <br>
                <span>Location: <?php echo $rws2['location']?></span><br>
                   
                  <?php 
                  if ($rws2["totalrater"] == 0){
                  ?>
                  <span>Rating:  <i class="bi bi-star text-warning" style="font-size:larger"> <?php echo $rws2["Rating"] ?> /5 </i></span>
                  <?php 
                  }else{?>
                  <span>Rating: <i class="bi bi-star text-warning" style="font-size:larger"> <?php echo $rws2["Rating"]/ $rws2["totalrater"] ?>  /5 </i></span>
<?php }?>
                <br><br>
                <a href="booking.php?id=<?php echo $rws2['id']?>" class="btn btn-warning btn-full">Book Now</a>
                
            </div>
            <?php
            }
            ?>
            <br><br>
            </div>
    


<?php include 'components/footer.php'?>

