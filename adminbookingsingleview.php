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
  <title>Maid Booking System</title>
  <style>
      .content{
          width:70%;
          border: .5px solid gray;
          border-radius:10px;
          padding:10px;
          margin:auto;
          display:flex;
          justify-content:space-evenly;
          padding:20px
          
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
            /* color:blue; */
            border-right: .5px solid;
            padding:30px;
      }
      .items .head{
          font-size:10px;
          color:black;
      }
  </style>
</head>
<body>
<?php include 'components/adminheadder.php'?>
<?php include ('dbconnection.php'); ?>
<?php 
 
//  echo $cusid;

    $sql = "SELECT * FROM booking WHERE id=$_GET[id]";
    $rs = $conn->query($sql);
    $rws = $rs->fetch_assoc();
    $srid = "";
    $srid = $rws['service'];
    $sql1 = "SELECT * FROM maid WHERE id=$srid";
    $rs1 = $conn->query($sql1);
    $rws1 = $rs1->fetch_assoc();
    ?>
<div class="container mt-5">
    <h3 class="text-center"><a href="adminbookingview.php"><i class="bi bi-arrow-left-circle-fill"></i> Back</a> <br><br> customer booking</h3>
    <div class="content">
    <div class="items">

        <h3>Booked Maid: <?php echo $rws1['Company_name']?></h3>
        <h3>Booked Date: <?php echo $rws['bookingdate']?></h3>
        <h2>Customer Name: <?php echo $rws['customer_name']?></h2>
        <!-- <h2>Customer Name: <?php echo $rws['customer_name']?></h2> -->

        </div>
    <div class="items">
        <h4>Address: <?php echo $rws['address']?> </h4>
        <h4>Phone Number: <?php echo $rws['customer_phone']?> </h4>
        <h4>Approve Status:
        <?php 
        if($rws['status'] == false){
        ?>
        <span class="bagde bg-warning">pending</span>
        <!-- <a href="approvebooking.php" class="btn btn-outline-success">Approve</a> -->
        <?php
         }else{
        ?>
        <span class="bagde bg-success">Approved</span>
        <?php }?>
        </h4>

    </div>

    </div>
</div>
    </body>
    </html>