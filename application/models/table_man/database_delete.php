<?php
	$id=$_REQUEST['id'];

	include 'dBconnect.php';

	$sql = "DELETE FROM student WHERE id='$id'";

	if ($conn->query($sql) === TRUE) {
	    echo "success";
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
?>

