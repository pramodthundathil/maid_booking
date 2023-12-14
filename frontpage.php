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
    body {
      /* background-image: url(images/maid_main.png); */
      background-repeat: no-repeat;
      background-position: bottom right;
      background-attachment: fixed;
    }

    .content {
      width: 80%;
      /* height: 400px; */
      border: .5px solid gray;
      border-radius: 10px;
      text-align: center;
      padding: 20px;
      box-sizing: border-box;
    }
    .card-item{
      width:95%;
      padding: 10px;
      border: .5px solid gray;
      border-radius: 10px;
      padding: 20px;
      text-align: center;
      box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
      margin-top: 20px;
      transition: all 1s;
    }
    .card-item span {
            color: green;
            font-size: large;
        }

        .card-item .new {
            font-size: 60px;
            color: blueviolet
        }
        .content a{
            text-decoration: none;
            color: black;
        }
        .content a:hover .card-item{
          transform: scale(1.05,1.05);
        }
        .carousel-item img{
            height:600px;
        }
        .contents{
            background-color:white;
            padding:20px;
        }
  </style>
</head>

<body>

<nav class="navbar">
  <div class="container">
    <a class="navbar-brand" href="#">
        Maid BooKing
      <!-- <img src="/docs/5.0/assets/brand/bootstrap-logo.svg" alt="" width="30" height="24"> -->
    </a>
    <a href="login.php" class="btn btn-dark">Login/ Register</a>
  </div>
</nav>

<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/maid_cr1.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/Elcare_car.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/babysitter_car.webp" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<div class="contents text-center">
    <div class="about text-center mt-5">
    <h3>ABOUT</h3>
    <p>Welcome to MAID BOOKING, a convenient platform designed to simplify the process of booking maid services.</p>
    <P>At MAID BOOKING, we aim to provide a seamless and efficient experience for users seeking reliable and professional maid services. Our platform connects customers with skilled and vetted maids, offering a range of services tailored to meet your household needs.</P>
    </div>
</div>

<?php  include 'components/footer.php'?>
</body>
</html>