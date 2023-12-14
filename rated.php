<?php
    include('dbconnection.php');
    
    // Sanitize the input to prevent SQL injection
    $bookingId = mysqli_real_escape_string($conn, $_GET['id']);

    $sql = "SELECT * FROM booking WHERE id=$bookingId";
    $rs = $conn->query($sql);
    $rws = $rs->fetch_assoc();

    
    $srid = $rws['service'];
    $rateing = "";
    $val = "";
    $totalno = "";

    $sql1 = "SELECT * FROM maid WHERE id=$srid";
    $rs1 = $conn->query($sql1);
    $rws1 = $rs1->fetch_assoc();

    if (isset($_POST['submit'])) {
        $rateing = $_POST['rating'];
        $val = $rws1["Rating"] + intval($rateing);
        $totalno = $rws1["totalrater"] + 1;

        // Corrected SQL queries with proper UPDATE syntax
        $sqlupdate = "UPDATE maid SET Rating = $val, totalrater = $totalno WHERE id = $srid";
        $sqlchange = "UPDATE booking SET rated = $rateing WHERE id = $bookingId";

        if (mysqli_query($conn, $sqlchange) && mysqli_query($conn, $sqlupdate)) {
            echo "<script type=\"text/javascript\">
                alert(\"Rating added\");
                window.location = \"mybooking.php\";
                </script>";
        } else {
            echo "Error: " . $sqlchange . "<br>" . mysqli_error($conn);
        }
    }
?>
