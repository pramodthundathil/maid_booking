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
        .itemcontainer {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-evenly;
        }

        .card-item {
            width: 200px;
            height: 150px;
            border: .5px solid gray;
            border-radius: 10px;
            padding: 20px;
            text-align: center;
            box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
            margin-top: 20px;
        }

        .card-item span {
            color: green;
            font-size: large;
        }

        .card-item .new {
            font-size: 60px;
            color: blueviolet
        }
        .maids a{
            text-decoration: none;
            color: black;
        }
    </style>
</head>

<body>
    <?php 
    include 'components/adminheadder.php'
    ?>

    <div class="container mt-5">
        <div class="itemcontainer">
            <div class="card-item">
                <h6>Total Maids</h6>
                <span>100</span>
                <br><br>
                <a class="btn btn-outline-primary" href="maids.php">View</a>
            </div>
            <div class="card-item">
                <h6>Total Requests</h6>
                <span>20</span>
                <br><br>
                <a class="btn btn-outline-info" href="">View</a>

            </div>
            <div class="card-item">
                <h6>Pending Requests</h6>
                <span>10</span>
                <br><br>
                <a class="btn btn-outline-dark" href="">View</a>
            </div>
            <div class="card-item">
                <h6>Approved</h6>
                <span>10</span>
                <br><br>
                <a class="btn btn-outline-warning" href="">View</a>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="maids itemcontainer">
            <a href="">
            <div class="card-item">
                <span class="material-symbols-outlined new">
                    cleaning_services
                </span>
                <br><br>
                Cleaning Services
            </div>
            </a>
            <a href="">
            <div class="card-item">
                <span class="material-symbols-outlined new">
                    child_care
                </span>
                <br><br>
                Baby Sitter

            </div>
            </a>
            <a href="">
            <div class="card-item">
                <span class="material-symbols-outlined new">
                    elderly_woman
                </span>
                <br><br>
                Elderly Care
            </div>
            </a>
            <a href="">
            <div class="card-item">
                <span class="material-symbols-outlined new">
                    cooking
                </span>
                <br><br>
                Cooking

            </div>
            </a>
        </div>
    </div>
    <?php include 'components/footer.php' ?>
</body>

</html>