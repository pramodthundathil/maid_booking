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
        .modal-body select,input{
            width:100%;
            padding:5px;
            outline:none;
            margin:5px;
            border-radius:10px;
            border: .5px solid rgba(138, 43, 226,.2);

        }
    </style>
</head>

<body>
    <?php include 'components/adminheadder.php'?>
    <?php include 'dbconnection.php' ?>

    <?php 
        $service = "";
        $company = "";
        $service_name = "";
        $hourly_rate = "";
        $monthly_rate = "";
        $availablity = true;

        if(isset($_POST['submit'])){

            $service = $_POST['service'];
            $company = $_POST['company'];
            $service_name = $_POST['name'];
            $hourly_rate = $_POST['loc'];
            $monthly_rate = $_POST['m_rate'];
            
            $sql = "INSERT INTO maid (Service, location, monthlyrate, Availability, Service_Name, Company_name) VALUES ('$service', '$hourly_rate', '$monthly_rate', '$availablity', '$service_name', '$company')";


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

    <div class="container mt-3">
        <div class="head">
            <h3>Maids</h3>
            <button class="btn btn-outline-dark" data-bs-toggle="modal" data-bs-target="#exampleModal">Create A Maid Service</button>
        </div>
        <div class="tables mt-3">
            <table class="table table-striped">
                <tr>
                    <th>Maid Service</th>
                    <th>Service Name</th>
                    <th>Maid Name</th>
                    <th>Location</th>
                    <th>Salary</th>
                    <th>Action</th>
                </tr>

                <?php 
                    $maids = "SELECT * FROM maid";
                    $rs = $conn->query($maids);
						while($rws = $rs->fetch_assoc()){
                ?>
                <tr>
                    <td><?php echo $rws['Service']?></td>
                    <td><?php echo $rws['Service_Name']?></td>
                    <td><?php echo $rws['Company_name']?></td>
                    <td><?php echo $rws['location']?></td>
                    <td>₹<?php echo $rws['monthlyrate']?></td>
                    <td>
                        <!-- <a href="" class="btn btn-outline-warning">View</a> -->
                        <a href="delelemaid.php?id=<?php echo $rws['id']?>" class="text-danger" style="font-size:20px;margin-left:10px;"><i class="bi bi-trash3-fill"></i></a>
                        <a href="updatemaid.php?id=<?php echo $rws['id']?>" class="text-info" style="font-size:20px;margin-left:10px;"><i class="bi bi-pencil-square"></i></a>
                
                </td>
                </tr>
                <?php
                        }
                ?>
            </table>
        </div>
    </div>

    <!-- model  -->
<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Add A New Maid</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="POST">
          <div class="row">
            <div class="col-md-12">
                <label for="">Service Category:</label><br>
                <select name="service" required>
                    <option value="" disabled selected>-------------</option>
                    <option value="Cleaning Service">Cleaning Service</option>
                    <option value="Baby Sitter">Baby Sitter</option>
                    <option value="Elderly Care">Elderly Care</option>
                    <option value="Cooking">Cooking</option>
                </select>
                
            </div>
            <div class="col-md-6">
                <label for="">Maid Name:</label>
                <input type="text" name="company" value="" required>
                
            </div>
            <div class="col-md-6">
                <label for="">Description:</label>
                <input type="text" name="name" value="" required>   
            </div>
            <div class="col-md-6">
                <label for="">Location:</label>
                <input type="text" name="loc" value="" required>
            </div>
            <div class="col-md-6">
            <label for="">Salary:</label>
                <input type="number" name="m_rate" value="" required>
            </div>
            
          </div>  
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" name="submit" value="submit" class="btn btn-primary">Save changes</button>
        </form>
      </div>
    </div>
  </div>
</div>

    <?php include 'components/footer.php'?>
</body>

</html>