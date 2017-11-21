<?php
// 'name':data.name,'password':data.password,'bith':data.bith,'adress':data.adress,'sex':data.sex

	$name=$_REQUEST['name'];
	$password=$_REQUEST['password'];
	$bith=$_REQUEST['bith'];
	$adress=$_REQUEST['adress'];
	$sex=$_REQUEST['sex'];

	include 'dBconnect.php';

	$sql = "INSERT INTO student (name, password, bith, adress, sex)
	VALUES ('$name', '$password', '$bith', '$adress', '$sex')";
	if ($conn->query($sql) === TRUE) {
	    echo "success";
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
?>

