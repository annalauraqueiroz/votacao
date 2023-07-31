<?php
	$con = mysqli_connect("localhost","root","ifsuldeminas","ProgWebBD");

	if ($con) {
		mysqli_close($con);
	}	
?>