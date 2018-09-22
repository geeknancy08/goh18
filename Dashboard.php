<?php 
session_start();
include_once 'Includes/Database.php';
$user = $_SESSION['u_uid']; 
$question_no = $_SESSION['u_question'];
//$ques = $question_no + 1;


/*$sql2 = "SELECT * FROM music WHERE Type='1'";
$result2 = mysqli_query($conn, $sql2);
$row2 = mysqli_fetch_assoc($result2);
$music1 = $row2['music'];*/
  
$sql = "SELECT * FROM questions WHERE q_no='$question_no'";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);
$image = $row['q_path'];

$sql1 ="SELECT * FROM users WHERE user_uid='$user'";
$result1 = mysqli_query($conn,$sql1);
$row1 = mysqli_fetch_assoc($result1);

if ($row1['avatar']=='1'){
$sql1 ="SELECT * FROM avatar WHERE avt_no='1'";
$result1 = mysqli_query($conn,$sql1);
$row1 = mysqli_fetch_assoc($result1);
$image1=$row1['avt_path'];
}

elseif ($row1['avatar']=='2'){
$sql1 ="SELECT * FROM avatar WHERE avt_no='2'";
$result1 = mysqli_query($conn,$sql1);
$row1 = mysqli_fetch_assoc($result1);
$image1=$row1['avt_path'];
}

elseif ($row1['avatar']=='3'){
$sql1 ="SELECT * FROM avatar WHERE avt_no='3'";
$result1 = mysqli_query($conn,$sql1);
$row1 = mysqli_fetch_assoc($result1);
$image1=$row1['avt_path'];
}

elseif ($row1['avatar']=='4'){
$sql1 ="SELECT * FROM avatar WHERE avt_no='4'";
$result1 = mysqli_query($conn,$sql1);
$row1 = mysqli_fetch_assoc($result1);
$image1=$row1['avt_path'];
}

elseif ($row1['avatar']=='5'){
$sql1 ="SELECT * FROM avatar WHERE avt_no='5'";
$result1 = mysqli_query($conn,$sql1);
$row1 = mysqli_fetch_assoc($result1);
$image1=$row1['avt_path'];
}

elseif ($row1['avatar']=='6'){
$sql1 ="SELECT * FROM avatar WHERE avt_no='6'";
$result1 = mysqli_query($conn,$sql1);
$row1 = mysqli_fetch_assoc($result1);
$image1=$row1['avt_path'];
}

include_once 'lbd.php';
$points=$_SESSION['$major'];
//$minsum=$_SESSION['rank'];
?>
<html lang="en">
<head>

  <link rel="shortcut icon" href="Pictures/gohlogo1.png">
  <title>Dashboard</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  body{
    background-color: #ddcea7;
  }
  .navbar {
      margin-bottom: 0;
      background-color: #8f422e;
      z-index: 9999;
      border: 0;
      font-size: 12px !important;
      /*line-height: 1.42857143 !important;*/
      letter-spacing: 4px;
      border-radius: 0;
      font-family: Montserrat, sans-serif;
  }
  .navbar li a, .navbar .navbar-brand {
      color: #fff !important;
  }
  .well
  {
    background-color: #121212;
  }
  .navbar-nav li a:hover, .navbar-nav li.active a {
      color: #8f422e !important;
      background-color: #ddcea7 !important;
  }
  .navbar-default .navbar-toggle {
      border-color: transparent;
      color: #fff !important;
  }
  .container-fluid
  {
    margin-top:12.5px;
  }
  .col-sm-8{
    padding: 30px;
  }
  button
{
  max-width: 100px;
  max-height: 40px;
}
button a
{
  color: white;
  font-family: monospace;
  font-size: 16px;
  text-align: center;
}
.btn{

  border-radius: 2rem;
  color: white;
  background-color: #121212;
  border:1px solid white;

}
.btn:hover
{
  background-color: #252525;
  color: white;
    border:0.4rem solid white;
    border-radius: 3rem;
}
.btn a:hover
{
  color:white;
  text-decoration: none;
  cursor: pointer;

}
.btn-default
{ 
  margin-top: 15px;
  border-radius: 3rem;
}
.tooltip-inner{
  background-color: white;
  color: #252525;
  border:2px solid #252525;
  border-radius: 16px;
  font-size: 15px;
  font-family: monospace;
}
.tooltip-arrow{
  color: red;
}
    @media screen and (max-width: 768px) {
      .col-sm-8{
        padding:8px;
      }
      .col-sm-8 img
      {
        width:220px;
        height: 150px;

      }
      .img-fluid
      {
        padding-top: 8px;
        width:50px;
        height: 40px;
      }

      .navbar-brand
      {
        
        font-size: 12px;
      }
    
    /*.btn-lg {
        width: 100%;
        margin-bottom: 35px;
    }*/
  }
  
   </style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<nav class="navbar navbar-default navbar-absolute-top">
  <div class="container">
    <div class="navbar-header">
       <img src="Pictures/gohlogo1.png" class="img-fluid" style="max-width: 80px;max-height: 50px;float: left; padding-right: 10px;">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>

      <a class="navbar-brand" href="Dashboard.php">DASHBOARD</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="Leaderboard.php">LEADERBOARD</a></li>
        <li><a href="AboutUs.html">ABOUT US</a></li>
        <li><a href="Rules.html">RULES</a></li>
        <li><a href="https://www.facebook.com/ImpetusJSS" target="blank;">FORUM</a></li>
        <li><form action="logout.php" method="POST"><button name="logout" class="btn-default" style="border: none;background-color:white;color:black;">LOGOUT</button></form></li>
      </ul>
    </div>
  </div>
</nav>
<div class="container-fluid text-center" style="background-color: #ddcea7;">    
  <div class="row">
    <!--<div class="col-sm-2">
<div class="well">
        <p>ADS</p>
      </div>
    </div>-->

    <div class="col-sm-8 text-left" style="background-image: url('Pictures/default.jpg'); border:1px solid white;">
        <?php
       echo '<button class="btn" style="color: white;">LEVEL-'.$question_no.'</button>';
       ?>
       </br>
      </br>
      
    <?php
    echo "<img src='$image' width='500px;' height='300px;'>"
    ?>
      <hr>
  <form action="questions.php" method="POST">
      <input type="text" name="ans" class="form-control form-rounded" placeholder="Text input" style="max-width: 200px;">
    </br>
    
    <button class="btn" name="answer">SUBMIT</button>
  </form> 
    </div>
    <div class="col-sm-4 ">
      <div class="well" style="padding-top:25px; padding-bottom: 10px;">
        <p id="demo" style="color: white; font-size:20px; font-family: arial black; font-weight: bolder;"></p>

<script>
// Set the date we're counting down to
var countDownDate = new Date("Aug 31,2018 23:59:59").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

    // Get todays date and time
    var now = new Date().getTime();
    
    // Find the distance between now and the count down date
    var distance = countDownDate - now;
    
    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
    // Output the result in an element with id="demo"
    document.getElementById("demo").innerHTML = days + "d : " + hours + "h : "
    + minutes + "m : " + seconds + "s ";
    
    // If the count down is over, write some text 
    if (distance < 0) {
        clearInterval(x);
        document.getElementById("demo").innerHTML = "Time's Up";
    }
}, 1000);
</script>

<audio autoplay loop>
<source src="Includes/Music.mp3" type="audio/mpeg">
</audio>

      </div>
      <div class="well" style="padding-bottom:40px;">
        <div class="media">
    <div class="media-left">
      <?php
      echo "<img src='$image1' class='media-object' style='max-width: 100px;max-height: 100px;'>";
      ?>
    </div>
    <div class="media-body">
<?php
    //echo $_SESSION['u_uid'].' ';
  //include_once 'Includes/Database.php';
    /*$user = $_SESSION['u_uid'];
    $sql = "SELECT * FROM users WHERE user_uid = '$user'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);*/
    echo '<div class="well well-sm" style="background-color: white;
      border-radius:20px; margin-top: 30px; max-width: 300px; color: #252525; font-weight: bolder;font-size: 14px; font-family: verdana;">'.$user.'</div>';
    ?>
  </div>
      </div>
    </div>
      <div class="well" style="padding-bottom: 60px;">
         <div class="media">
    <div class="media-left" style = "bottom-padding: 10px;">
      <img src="Pictures/POINTS.png" class="media-object" style="max-width: 120px;max-height: 120px;">
    </div>
    <div class="media-body">
    <?php

      echo '<div class="well well-sm" style="background-color: white;
      border-radius:20px; margin-top: 25px; max-width: 300px; color: #252525; font-weight: bolder;font-size: 18px; font-family: arial black;">'.$points.'</div>';
      ?>
  </div>
      </div>
     
    </div>
    </div>
  </div>
</div>

<footer class="container-fluid text-center" style="background-color: #8f422e;">
  <p style="float: left;color: white; font-family: Montserrat; font-size: 12px;margin-top: 7px;">Copyright &copy; 2018 <img src="Pictures/logo1.png" style="max-width: 30px;max-height: 30px;"><u>Impetus Student Society</u></p>
  <p style="float: right;color: white; font-family: Montserrat; font-size: 12px;margin-top: 7px;">Development Team - Nancy Poddar, Mayank Garg, Chahak Tyagi</p>
</footer>

</body>
</html>

</body>
</html>




