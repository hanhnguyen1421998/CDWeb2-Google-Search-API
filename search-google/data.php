<?php
	// kết nối db
	include 'db/config.php';
	$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS,DB_NAME);
	mysqli_set_charset($connection, 'utf8');

	// lấy dữ liệu search
	$list_url =  json_encode($_POST['string']);
	
	$array = explode(',', $list_url);
	$search= $_POST['search'];
	$sql_keysearch = $sql = "INSERT INTO keyword(keyword_text);
	VALUES ('$search')";

	if (mysqli_query($conn, $sql_keysearch)) {
		echo json_encode($_POST['search']);
	} 
	// thêm vào db
	 function option1($arr, $connect)
	 {  
	      if(is_array($arr))  
	      {  
	        for ($i=0; $i < count($arr) ; $i++){
	            $sql = "INSERT INTO url(url_link) VALUES ('$arr[$i]')";  
	            mysqli_query($connect, $sql);
	        }
	        
	      }  
	 }
	 

	 if(option1($array, $connection)) {
	 	echo "không thành công";
	 }
	 else {
	 	echo "thành công";
	 }
	 mysqli_close($conn);