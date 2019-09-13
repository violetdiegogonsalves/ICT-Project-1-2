<?php

	require_once("config.php");
	$imageData = isset($_POST["sub_id"]) ? $_POST["sub_id"] : false;

	if ($imageData) {
		
	
		$output = '';
		$query = "update plc_assets_sub set link='".$_POST["plc_sub_link1"]."' where id = '".$_POST["sub_id"]."'";
		$connect = db_connect();
		$result = mysqli_query($connect, $query);

		if (!$result = $connect->query($query)) {
			$err
			= "QUERY FAIL: "
			. $query
			. ' ERRNO: '
			. $conn->errno
			. ' ERROR: '
			. $conn->error
			;
			trigger_error($err, E_USER_ERROR);
		}

		
      $output = 'update success';
		echo $output;
 }




?>
