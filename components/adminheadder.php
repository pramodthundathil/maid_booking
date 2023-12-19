
<?php
$firstname = "";
  session_start();
  $uname = $_SESSION['uname'];

  if ($_SESSION == null){
    echo "<script type = \"text/javascript\">
           alert(\"Please Login To Continue..\");
           window.location = (\"frontpage.php\")
           </script>";
  }

?>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="adminindex.php">Maid</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="adminindex.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="maids.php">maids</a>
        </li>
        <li class="nav-item">
            <a href="adminbookingview.php" class="nav-link">Bookings</a>
        </li>
        <li class="nav-item">
            <a href="approvedbookings.php" class="nav-link">Aprovels</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
         <?php print_r($uname); ?>
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href='logout.php'>Logout</a></li>
            <li><a class="dropdown-item" href="#"></a></li>
            <li><hr class="dropdown-divider"></li>
            
          </ul>
        </li>
        
      </ul>
      <!-- <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form> -->
    </div>
  </div>
</nav>