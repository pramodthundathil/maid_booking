<?php include 'dbconnection.php' ?>

<?php 
    $sql = "UPDATE booking SET status='1' WHERE id='$_GET[id]' ";
    if (mysqli_query($conn, $sql)) {
        echo "<script type = \"text/javascript\">
			alert(\"Booking approved \");
				window.location = (\"approvedbookings.php\")
				</script>";
      } 
      else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
    
?>