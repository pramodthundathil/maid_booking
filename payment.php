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
      background-image: url(images/maid_main.png);
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

    .card-item {
      width: 95%;
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

    .content a {
      text-decoration: none;
      color: black;
    }

    .content a:hover .card-item {
      transform: scale(1.05, 1.05);
    }
  </style>
</head>

<body>
  <?php include 'components/headder.php'?>

  <div class="container mt-5 text-center">
    <form id="checkout-selection" method="POST">
      <div style="display:none">
        <input type="radio" name="checkout" value="automatic">Automatic Checkout Demo<br>
        <input type="radio"  name="checkout" value="orders">Manual Checkout Demo<br><br><br>
      </div>
      <input type="submit" class="btn btn-info" value="Make Payment">
    </form>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script>
      jQuery(document).ready(function($) {
        var form = $('#checkout-selection');
        var radio = $('input[name="checkout"]');
        var choice = '';
        
          
        form.attr('action', 'pay.php?checkout=manual');
         
            // form.attr('action', 'pay.php?checkout=automatic');
        
       
      });
    </script>

  </div>

  <body>