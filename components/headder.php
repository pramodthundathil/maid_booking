<?php include ('dbconnection.php'); ?>

<?php 
  $firstname = "";
  session_start();
  $firstname = $_SESSION['name'];

  if ($_SESSION == null){
    echo "<script type = \"text/javascript\">
           alert(\"Please Login To Continue..\");
           window.location = (\"login.php\")
           </script>";
  }
?>
<?php
$search = "";

if (isset($_POST['submit'])){

  $search = $_POST['search'];
  $sql = "SELECT * FROM maid WHERE Service LIKE '$search%' ";
  $result = "";
    $result = $conn->query($sql);
}

?>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Maid</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="mybooking.php">My Bookings</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="maidlist.php">All Maids</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
         <?php print_r($firstname); ?>
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href='logout.php'>Logout</a></li>
            <li><a class="dropdown-item" href="#"></a></li>
            <li><hr class="dropdown-divider"></li>
            
          </ul>
        </li>
        
      </ul>
      <form class="d-flex" role="search" method="POST">
        <input class="form-control me-2" type="search" name='search' placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit" value="submit" name="submit" >Search</button>
      </form>
    </div>
  </div>
</nav>
<div class="container">
  <?php

// if ($result->num_rows > 0){
//   while($row = $result->fetch_assoc() ){
//     echo $row["Service"]."  ".$row["Company_name"]."  ".$row["Rating"]."<br>";
//   }
//   } else {
//     echo "0 records";
//   }

  ?>
 
</div>

