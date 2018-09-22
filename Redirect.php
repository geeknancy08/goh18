<?php

session_start();

include_once 'Includes/Database.php';

if(isset($_POST['avtar'])){	
	header("Location: image.html");
	}


if(isset($_POST['chitvan'])){
	$user=$_SESSION['u_uid'];
	$sql = "UPDATE users SET avatar = '1' WHERE user_uid = '$user'";
	$result = mysqli_query($conn,$sql);
	header ("Location: Dashboard.php");
	exit();
}

if(isset($_POST['widow'])){
	$user=$_SESSION['u_uid'];
	$sql = "UPDATE users SET avatar = '2' WHERE user_uid = '$user'";
	$result = mysqli_query($conn,$sql);
	header ("Location: Dashboard.php");
	exit();
}

if(isset($_POST['rick'])){
	$user=$_SESSION['u_uid'];
	$sql = "UPDATE users SET avatar = '3' WHERE user_uid = '$user'";
	$result = mysqli_query($conn,$sql);
	header ("Location: Dashboard.php");
	exit();
}


if(isset($_POST['hermoine'])){
	$user=$_SESSION['u_uid'];
	$sql = "UPDATE users SET avatar = '4' WHERE user_uid = '$user'";
	$result = mysqli_query($conn,$sql);
	header ("Location: Dashboard.php");
	exit();
}

if(isset($_POST['sheldon'])){
	$user=$_SESSION['u_uid'];
	$sql = "UPDATE users SET avatar = '5' WHERE user_uid = '$user'";
	$result = mysqli_query($conn,$sql);
	/*if($result==TRUE){
		echo 'UPDATED';
	}
	else {
		echo 'NOT DONE';
	}*/
	header ("Location: Dashboard.php");
	exit();
}

if(isset($_POST['velma'])){
	$user=$_SESSION['u_uid'];
	$sql = "UPDATE users SET avatar = '6' WHERE user_uid = '$user'";
	$result = mysqli_query($conn,$sql);
	header ("Location: Dashboard.php");
	exit();
}