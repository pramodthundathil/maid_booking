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
    
  <title>Maid Booking System</title>
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
<?php include 'components/adminheadder.php'?>
<?php include ('dbconnection.php'); ?>
<div class="container mt-5">
    <h4 class='text-center'>Customer Bookings </h4> <br>
<table class='table table-striped'>
    <tr>
    <th>Customer</th>
    <th>Booking Date</th>
    <th>Duration</th>
    <th>Maid</th>
    <th>Action</th>
    
    </tr>
<?php 
 
//  echo $cusid;

    $sql = "SELECT * FROM booking";
    $rs = $conn->query($sql);
    while($rws = $rs->fetch_assoc())
    {
     if($rws["status"] == false)   {

?>
<tr>
    <td><?php echo $rws['customer_name']?></td>
    <td><?php echo $rws['bookingdate'], $rws['service'] ?></td>
    <td><?php echo $rws['duration']?></td>
    
    <td>

        <?php 
        $ser_id = $rws['service'];
        echo $ser_id;
        $sql1 = "SELECT * FROM maid WHERE id='$ser_id'";
        $rs1 = $conn->query($sql1);
        while($rws1 = $rs1->fetch_assoc()){
        ?>
       <?php 
       echo $rws1['Service'] ?>
         <?php
         }
        ?>
        Maid service
    </td>
    <td>
    <a href="adminbookingsingleview.php?id=<?php echo $rws['id']?>" class="btn btn-info btn-sm" >View</a>
    <a href="approvebooking.php?id=<?php echo $rws['id']?>" class="btn btn-success btn-sm" >Approve</a>

      <a href="deletebookingadmin.php?id=<?php echo $rws['id']?>" class="btn btn-danger btn-sm" >delete</a>
</td>
    
</tr>


<?php }}
?>


</table>
    </div>
    <?php include 'components/footer.php'?>
