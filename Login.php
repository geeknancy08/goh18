<?php

session_start();

if(isset($_POST['submit2'])){

	include 'Includes/Database.php';

	$uid = mysqli_real_escape_string($conn,$_POST['uid']);
	$pwd = mysqli_real_escape_string($conn,$_POST['pwd']);
	if(empty($uid) || empty($pwd)){
		header("Location: index.php?login=empty");
		
		exit();
	}else{
		$sql = "SELECT * FROM users WHERE user_uid='$uid'";
		$result = mysqli_query($conn,$sql);
		$resultCheck = mysqli_num_rows($result);  

		if($resultCheck < 1){
		    $_SESSION['error'] = "ALERT!! Sign In Error";
			header("Location: index.php?login=error");
			exit();
		}else{
			if($row = mysqli_fetch_assoc($result)){
				$hashCheck = password_verify( $pwd, $row['user_pwd']);
					echo $row['user_uid'];
					if($hashCheck == false){
				    //$_SESSION['error'] = "ALERT!! Password Incorrect";
					header("Location: index.php?login=password_incorrect");
					
					exit();
				}elseif ($hashCheck == true) {
					$_SESSION['u_id'] = $row['user_id'];
					//$_SESSION['u_name'] = $row['user_first'];
					//$_SESSION['u_email'] = $row['user_email'];
					$_SESSION['u_uid'] = $row['user_uid'];
					$_SESSION['u_question'] = $row['user_q']; 
					//$_SESSION['error'] = "";
					header("Location: Dashboard.php");
					exit();
				}
			}
		}
	}
}
else{
	header("Location: index.php?login=error");
	exit();
}