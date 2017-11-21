<?php
	$first_num=$_REQUEST['first_num'];
	$data_count=$_REQUEST['data_count'];

	include 'dBconnect.php';

	$sql="SELECT COUNT(*) AS total FROM student";
	$total_count=$conn->query($sql);
	$count=$total_count->fetch_assoc()['total'];
	$sql = "SELECT * FROM student LIMIT $data_count OFFSET $first_num";
	$result=$conn->query($sql);

	if($result->num_rows > 0)
	{
		while ($row=$result->fetch_assoc())
		{
			$arry[]=$row;
		}
	}
	else
	{
		echo "results is 0";
	}
	$conn->close();

	echo json_encode(
		array(
			'total'=> $count,
			'data'=> $arry
		)
	);
?>

