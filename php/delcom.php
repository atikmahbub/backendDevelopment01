<?php
	session_start();
	include'db.php';

	$min=$_SESSION['ename'];
	
	$id=$_GET['id'];


	$sql="DELETE FROM comment WHERE id='$id'";


if (mysqli_query($conn, $sql)) {
	
	echo "<script>
	window.location='forumpage.php?page';
	</script>";

	} 
else {
    echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);

    ?>