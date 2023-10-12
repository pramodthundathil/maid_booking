<?php include 'dbconnection.php' ?>

<?php 
    $sql = "DELETE FROM maid WHERE id='$_GET[id]' ";
    if (mysqli_query($conn, $sql)) {
        echo "<script type = \"text/javascript\">
			alert(\"Data Deleted\");
				window.location = (\"maids.php\")
				</script>";
      } 
      else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
    
?>