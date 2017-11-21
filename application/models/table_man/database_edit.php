<?php

	$id=$_REQUEST['id'];
	$name=$_REQUEST['name'];
	$pass=$_REQUEST['password'];
	$bith=$_REQUEST['bith'];
	$adress=$_REQUEST['adress'];
	$sex=$_REQUEST['sex'];
	
	include 'dBconnect.php';

	$sql = "UPDATE student SET name='$name', password='$pass', bith='$bith', adress='$adress', sex='$sex' WHERE id='$id'";

	if ($conn->query($sql) === TRUE) {
	    echo "success";
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
?>

