<?php
require_once("config.php");

$imageData = isset($_POST["imageData1"]) ? $_POST["imageData1"] : false;

	if ($imageData) {
		
		$getQuery = "SELECT image FROM fps_assets_sub WHERE id = '".$_POST["sub_id"]."'";
		$connect = db_connect();
		$resultSet = mysqli_query($connect, $getQuery);
		while ($row = $resultSet->fetch_object()) {
			$imageURL = $row->image;
			if($imageURL != null && $imageURL !=''){
					unlink($imageURL);
			}	
		}
		
		define('UPLOAD_DIR', '../uploads/images/asset/sub/');
		$image_parts = explode(";base64,", $_POST["imageData1"]);
		$image_type_aux = explode("image/", $image_parts[0]);
		$image_type = $image_type_aux[1];
		$image_base64 = base64_decode($image_parts[1]);
		$file = UPLOAD_DIR . uniqid() . '.' . $image_type;
		file_put_contents($file, $image_base64);
	
		$output = '';
		$query = "update fps_assets_sub set image='".$file."' where id = '".$_POST["sub_id"]."'";
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

		
      $output .= 'upload success';
		echo $output;
 }

 ?>
