<?php
include_once 'lbd.php';

/*$user=$_SESSION['u_uid'];
    
$sql = "SELECT * FROM users";
$result = mysqli_query($conn,$sql);
$user_no = mysqli_num_rows($result);*/
    

$sql2 = "SELECT avatar, user_uid,user_q FROM users ORDER BY user_q DESC";
$query = mysqli_query($conn,$sql2);
$n=0;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="shortcut icon" href="Pictures/gohlogo1.png">
  <title>Leaderboard</title>
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
  .table-responsive {
    max-height:375px;
}
  .col-sm-8{
    padding: 43px;
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
  background-color: #121212;
  border:1px solid white;

}
.btn:hover
{
  background-color: #252525;
  color: white;
    border:0.2rem solid white;
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
  border-radius: 2rem;
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
.table{
  border:2px solid #8f422e;
}

.thead-dark{
  background-image: url('default.jpg');
  color: white;
  font-family: Montserrat;
  font-size: 15px;
}
th{
  text-align: center;
  font-family:Montserrat;
}
td{
  font-family:monospace;
  font-weight: bolder;
}
.table.table-bordered > thead > tr > th{
    border:2px solid #8f422e;
    text-align: left;
}
.table.table-bordered > tbody > tr > td{
    border:2px solid #8f422e;
    text-align: left;
    font-size: 20px;
}

.table.table-bordered > tbody>tr > th {
    border:2px solid #8f422e;
    text-align: left;
}
.table-hover{
  background-color: #ddcea7;
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
.table-responsive {
    max-height:3000px;
}
      .img-fluid
      {
        padding-top: 8px;
        width:50px;
        height: 40px;
      }
      .table{
  border:2px solid #8f422e;
}
      .thead-dark{
  font-size: 10px;
}
      .navbar-brand
      {
        
        font-size: 10.9px;
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

      <a class="navbar-brand" href="#myPage">LEADERBOARD</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="Dashboard.php">DASHBOARD</a></li>
        <li><a href="AboutUs.html">ABOUT US</a></li>
        <li><a href="Rules.html">RULES</a></li>
        <li><a href="https://www.facebook.com/ImpetusJSS" target="blank;">FORUM</a></li>
        <li><form action="logout.php" method="POST"><button name="logout" class="btn-default" style="border: none;background-color:white;color:black; margin-top: 15px; border-radius: 3rem;">LOGOUT</form></li>
      </ul>
    </div>
  </div>
</nav>
<div class="container-fluid text-center" style="background-color: #ddcea7;">    
  <div class="row">
    <div class="col-sm-2">
    </div>
    <div class="col-sm-8" > 
  <div class="panel panel-default" style="border-radius: 20px;">
    <div class="panel-heading" style="background-image: url('Pictures/default.jpg'); color: white; font-size: 30px; font-weight: bolder;font-family: Monteserrat;text-shadow: 0 0 20px white; border-radius: 20px;       webkit-box-shadow: -1px 4px 26px 11px rgba(0,0,0,0.75);
-moz-box-shadow: -1px 4px 26px 11px rgba(0,0,0,0.75);
box-shadow: -1px 4px 26px 11px rgba(0,0,0,0.75);">GAME IS ON!!</div>
</div>
<audio autoplay loop>
<source src="Includes/Music.mp3" type="audio/mpeg">
</audio>
      <div class="table-responsive">          
  <table class="table table-striped table-bordered table-condensed table-hover table-sm ">
  <thead class="thead-dark">
    <tr>
      <th scope="col">RANK</th>
      <th scope="col">AVATAR</th>
      <th scope="col">USERNAME</th>
      <th scope="col">LEVEL</th>
    </tr>
  </thead>
  <tbody>
  <?php
  while($row7 = mysqli_fetch_array($query)){
      $n=$n+1;

if ($row7['avatar']=='1'){
$sql1 ="SELECT * FROM avatar WHERE avt_no='1'";
$result1 = mysqli_query($conn,$sql1);
$row1 = mysqli_fetch_assoc($result1);
$image1=$row1['avt_path'];
}

elseif ($row7['avatar']=='2'){
$sql1 ="SELECT * FROM avatar WHERE avt_no='2'";
$result1 = mysqli_query($conn,$sql1);
$row1 = mysqli_fetch_assoc($result1);
$image1=$row1['avt_path'];
}

elseif ($row7['avatar']=='3'){
$sql1 ="SELECT * FROM avatar WHERE avt_no='3'";
$result1 = mysqli_query($conn,$sql1);
$row1 = mysqli_fetch_assoc($result1);
$image1=$row1['avt_path'];
}

elseif ($row7['avatar']=='4'){
$sql1 ="SELECT * FROM avatar WHERE avt_no='4'";
$result1 = mysqli_query($conn,$sql1);
$row1 = mysqli_fetch_assoc($result1);
$image1=$row1['avt_path'];
}

elseif ($row7['avatar']=='5'){
$sql1 ="SELECT * FROM avatar WHERE avt_no='5'";
$result1 = mysqli_query($conn,$sql1);
$row1 = mysqli_fetch_assoc($result1);
$image1=$row1['avt_path'];

}

elseif ($row7['avatar']=='6'){
$sql1 ="SELECT * FROM avatar WHERE avt_no='6'";
$result1 = mysqli_query($conn,$sql1);
$row1 = mysqli_fetch_assoc($result1);
$image1=$row1['avt_path'];
}
else{
$sql1 ="SELECT * FROM avatar WHERE avt_no='1'";
$result1 = mysqli_query($conn,$sql1);
$row1 = mysqli_fetch_assoc($result1);
$image1=$row1['avt_path'];
}


  echo "<tr><th scope='row'>".$n."</th><td><img src ='$image1' class='img-responsive voc_list_preview_img' style='max-width: 100px;max-height: 80px;padding-bottom: 18px;'>"."</td><td>".$row7['user_uid'] ."</td><td>".$row7['user_q']. "</td></tr>";
  //echo "5wasedgfhrunning";
}//echo "5wasedgfhexit";

  ?>
    <!--<div class="col-sm-2 ">-->
    <!--  <embed src="https://s3.amazonaws.com/Syntaxxx/bigger-picture.mp3" autostart="true" loop="true" width="0"height="0">-->
    <!--    </embed>-->
    <!--</div>-->
  </div>
</div>
</body>
</html>

<!--<html>-->
<!--    <body>-->
<!--        <footer class="container-fluid text-center" style="background-color: #8f422e;">-->
<!--  <p style="float: left;color: white; font-family: Montserrat; font-size: 12px;margin-top: 7px;">Copyright &copy; 2018 <img src="Pictures/logo1.png" style="max-width: 30px;max-height: 30px;"><u>Impetus Student Society</u></p>-->
<!--  <p style="float: right;color: white; font-family: Montserrat; font-size: 12px;margin-top: 7px;">Development Team - Nancy Poddar, Mayank Garg, Chahak Tyagi</p>-->
<!--</footer>-->
<!--    </body>-->
<!--</html>-->
