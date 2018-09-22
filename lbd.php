<?php
    //UPDATE `questions` SET `user_on_q`=0
	include_once 'Includes/Database.php';
	
    $user=$_SESSION['u_uid'];

    $ques = $_SESSION['u_question'];
    $q=$ques-1;
    
    $sql1 = "SELECT * FROM questions WHERE q_no='$q' ";
    $result1 = mysqli_query($conn,$sql1);
    
    $score = $_SESSION['rank'] + 1;
    
    
    $result = mysqli_query($conn,$sql);

    $_SESSION['$major'] = ($q)*10;
    $majo=$_SESSION['$major'];
    
    
    $sql = "UPDATE users SET points='$majo' WHERE user_uid='$user' ";
    $result = mysqli_query($conn,$sql);
    
    
?>