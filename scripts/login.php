<?php

	include 'connect.php';

	if(isset($_POST['uName']) && isset($_POST['password'])) {


		$username = $_POST['uName'];
		$password = sha1($_POST['password']);

		$sql = "SELECT user_id FROM user_account WHERE username = '$username' AND password = '$password'";
		$results = mysqli_query($link, $sql);
		echo (!$results?die(mysqli_error($link)."<br>".$sql):"");
		
		$count = mysqli_num_rows($results);
		
		echo $count;

		if($count > 0){
			list($userId) = mysqli_fetch_array($results);
			$time = time();
			$secret = "what's in a secret?";

			$hash = sha1($userId.$username.$time.$secret);

			$expirationTime = strtotime("+2 years");

			setcookie("user",$userName, $expirationTime);
			setcookie("userId",$userId, $expirationTime);
			setcookie("time", $time, $expirationTime);
			setcookie("hash", $hash, $expirationTime);

			return true;
		
		}
	}
	return false;
?>