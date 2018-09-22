<?php
session_start();
if (isset($_POST['submit'])) {

	include_once 'Includes/Database.php';
	
	$name = mysqli_real_escape_string($conn, $_POST['name']);
	$contact = mysqli_real_escape_string($conn, $_POST['mobile']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$uid = mysqli_real_escape_string($conn, $_POST['uid']);
	$password = mysqli_real_escape_string($conn, $_POST['pwd']);
	$branch = mysqli_real_escape_string($conn, $_POST['branch']);
	$year = mysqli_real_escape_string($conn, $_POST['year']);
	
	//error handlers 
	//check for empty fields

	if(empty($name)||empty($contact)||empty($email)||empty($uid)||empty($password)){
		//$_SESSION['error'] = "ALERT!! Empty Field";
		header ("Location: index.php?signup=empty");
		exit;
	}else{
		if(!preg_match("/^[0-9]/", $contact)){
			//echo $contact;
			//$_SESSION['error'] = "ALERT!! Invalid Name";
			header ("Location: index.php?signup=invalid");
			exit;
		}else {
			if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
				//$_SESSION['error'] = "ALERT!! Invalid E-mail";
				header ("Location: index.php?signup=invalid-mail");
				exit;			
			}else{
				$sql="SELECT * FROM users WHERE user_uid='$uid'";
				$result = mysqli_query($conn, $sql);
				$resultcheck = mysqli_num_rows($result);

				if($resultcheck>0) {
					//$_SESSION['error'] = "ALERT!! User Taken";
					header ("Location: index.php?signup=usertaken");
					exit;
				}else {
					$hashedpwd = password_hash($password,PASSWORD_DEFAULT);
					$sql = "INSERT INTO users (user_name, user_contact, user_email, Branch, Year, user_uid, user_pwd, avatar, user_q, points, token) VALUES ('$name', '$contact', '$email', '$branch', '$year', '$uid', '$hashedpwd', '5', '1', '0', '0');";
					$res = mysqli_query($conn,$sql);

					if($res==TRUE){
						$ques="SELECT * FROM questions WHERE q_no='1'";
						$resu = mysqli_query($conn,$ques);
						$rowq = mysqli_fetch_assoc($resu);
						//echo $rowq['user_on_q'];
						
						$upd = $rowq['user_on_q'] + 1;
						//echo $upd;
						
						$ques1 = "UPDATE questions SET user_on_q='$upd' WHERE q_no='1'";
						$resu1 = mysqli_query($conn,$ques1);
						//$_SESSION['total'] = $_SESSION['total'] + 1;
					}

				}

					$avt = "SELECT * FROM users WHERE user_uid='$uid'";
					$result = mysqli_query($conn,$avt);
					$row = mysqli_fetch_assoc($result);
					$_SESSION['u_uid'] = $row['user_uid'];
					$_SESSION['u_question'] = $row['user_q'];

					//$_SESSION['total'] =  $_SESSION['total']+1;

					if($result==TRUE){
						 header ("Location: avtar.html");}
					//$_SESSION['error'] = "ALERT!! Signup Done";
					exit;
				}
			}
		}

	}

	else {
	header ("Location: ../index.php");
	exit();
}

