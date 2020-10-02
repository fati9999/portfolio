<?php
include('connect.php');
if(isset($_POST['email'])){



	$Name = $_POST['name'];
	$Email = $_POST['email'];
	$Message = $_POST['message'];

	$sql = " INSERT INTO contact (cname, cemail, cmessage) VALUES ('$Name', '$Email', '$Message')";
	if(!mysqli_query($connection, $sql))
	{
		echo 'not inserted';
	}
	else{
        echo 'inserted';
	}
	}