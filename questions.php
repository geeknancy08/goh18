<?php

	if(isset($_POST['answer'])){
		session_start();
		include_once 'Includes/Database.php';
		
		$Uanswer = mysqli_real_escape_string($conn,$_POST['ans']);
		$username = $_SESSION['u_uid'];

		$sql = "SELECT * FROM users WHERE user_uid='$username'";
		$result = mysqli_query($conn,$sql);
		$row = mysqli_fetch_assoc($result);

		$qno = $row['user_q'];
		$questionNo = $row['user_q'] + 1;

		$sql1 = "SELECT * FROM questions WHERE q_no='$questionNo'";
		$result1 = mysqli_query($conn,$sql1);
		$row1 = mysqli_fetch_assoc($result1);

		$sql2 = "SELECT * FROM questions WHERE q_no='$qno'";
		$result2 = mysqli_query($conn,$sql2);
		$row2 = mysqli_fetch_assoc($result2);
		/*
		$image1 = $row1['q_path'];
		$image2 = $row2['q_path'];
		echo "<img src='$image1' >";
    	echo "<img src='$image2' >";
		*/

		//echo $uq;
			$questionImage = $row2['q_path'];
			$correctAnswer = $row2['q_answer'];

			if($Uanswer == $correctAnswer){
			    //$_SESSION['rank'] = $row1['user_on_q'];
				$uq1 = $row1['user_on_q'] + 1;
				
				$uq2 = $row2['user_on_q'] - 1;


				$sql3 = "UPDATE questions SET user_on_q = '$uq1' WHERE q_no='$questionNo'";
				$result3 = mysqli_query($conn,$sql3);

				$sql4 = "UPDATE questions SET user_on_q = '$uq2' WHERE q_no='$qno'";
				$result4 = mysqli_query($conn,$sql4);


				$sql5 = "UPDATE users SET user_q = '$questionNo' WHERE user_uid = '$username'";
				$result5 = mysqli_query($conn,$sql5);

				$_SESSION['u_question'] = $questionNo;
				
				header("Location: Dashboard.php?answer=correct");
				exit();
			}else{
				header("Location: Dashboard.php?answer=incorrect");
				exit();
			}	
		}
		else{
			echo 'something is wrong';
		}
	
?>